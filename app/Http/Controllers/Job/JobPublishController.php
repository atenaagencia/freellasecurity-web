<?php

namespace App\Http\Controllers\Job;

use Auth;
use DB;
use Input;
use Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;
use App\Traits\JobTrait;
use App\Job;
use App\Helpers\DataArrayHelper;
use App\JobApply;
use App\Milestones;
use App\Paypalcustomers;
use App\User;
use Illuminate\Support\Facades\Mail;
use Validator;
use URL;
use Config;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;


class JobPublishController extends Controller
{

    use JobTrait;
    private $_api_context;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('company');
        $paypal_conf = Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);

    }

    // Below function is added by hetal (38-42)
    public function verifywork(Request $request) {
        $milestoneId = $request->milestoneId;
        $milestone_details = Milestones::where('id', $milestoneId)->get();
        echo json_encode($milestone_details);
    }

    // Below function is added by hetal for display create milestones function(45-54)
    public function create_milestones($id) {
        $job = Job::findOrFail($id);
        $currencies = DataArrayHelper::currenciesArray();
        $job_applications = JobApply::where('job_id', $id)->get();
    
        return view('job.create_milestones')
                ->with('job', $job)
                ->with('currencies', array_unique($currencies))
                ->with('job_applications', $job_applications);
    }

    public function addpaypalcustomerform($milestoneId) {
        return view('job.addpaypalcustomer')->with('milestoneId', $milestoneId);
    }

    // Below function is added by hetal to mark as completed milestone(57-83)
    public function completemilestone(Request $request) {
        $milestoneId = $request['completemilestoneId'];
        $milestoneDetails = Milestones::where('id', $milestoneId)->get();
        $candidateDetails = User::where('id', $milestoneDetails[0]['candidate_id'])->get();

        $candidateDetails = Paypalcustomers::where('user_id', $candidateDetails[0]->id)->get();
        if(!empty($candidateDetails->toArray())){
            return \Redirect::route('credit.payment', $milestoneId);
        } else {
            return \Redirect::route('add.paypalcustomer.form', $milestoneId);
        }
        //     if($custData == 1){

        //     }

        // if(Milestones::where('id', $milestoneId)->update(array("status"=>3))) {
        //     $milestoneDetails = Milestones::where('id', $milestoneId)->get();
        //     $candidateDetails = User::where('id', $milestoneDetails[0]['candidate_id'])->get();

        //     /* get paypal customer Id details */
        //     $custData = $this->paypalCustomerId($candidateDetails[0]->id);
        //     if($custData == 1){

        //     }

        //     $jobDetail = Job::where('id', $milestoneDetails[0]['job_id'])->get();
            
        //     $userName = Auth::guard('company')->user()->name; 
        //     $email = $candidateDetails[0]->email;
        //     $name = $candidateDetails[0]->name;
        //     $body = "Milestone";
        //     $data = array('user'=>$userName, "name"=>$name ,"jobname"=>$jobDetail[0]['title']);

        //     $status=  Mail::send('emails.milestone_change_status',$data, function($message) use ($name, $email,$body) {
        //     $message->to($email, 'Webfreelas')->subject('Milestone status changed')->setBody($body);
        //     $message->from('support@jobsportal.com','JobsPortal');
        //     });

        //     flash(__('Milestone marked as completed successfully'))->success();
        // } else {
        //    flash(__('Something wrong... Please try again later'))->error();
        // }

        // $milestoneDetails = Milestones::where('id', $milestoneId)->get();    
        // return \Redirect::route('milestones.list', $milestoneDetails[0]['job_id']);
    }

    public function creditpayment($milestoneId) {
        if(Milestones::where('id', $milestoneId)->update(array("status"=>3))) {
            $milestoneDetails = Milestones::where('id', $milestoneId)->get();
            $candidateDetails = User::where('id', $milestoneDetails[0]['candidate_id'])->get();

            $jobDetail = Job::where('id', $milestoneDetails[0]['job_id'])->get();
            
            /* paypal payouts */
            $payouts = new \PayPal\Api\Payout();
            $senderBatchHeader = new \PayPal\Api\PayoutSenderBatchHeader();

            $senderBatchHeader->setSenderBatchId(uniqid())
                              ->setEmailSubject("payment of a Milestone");

            $senderItem1 = new \PayPal\Api\PayoutItem();
            $senderItem1->setRecipientType('Email')
                ->setNote('Thanks you for your work.')
                ->setReceiver('cdo-buyer@logixbuilt.com')
                ->setSenderItemId("item_1" . uniqid())
                ->setAmount(new \PayPal\Api\Currency('{
                                    "value":"0.001",
                                    "currency":"USD"
                                }'));

            $payouts->setSenderBatchHeader($senderBatchHeader)
                    ->addItem($senderItem1);
                
            $request = clone $payouts;

            try {
                echo 1; 
                $output = $payouts->create(null, $this->_api_context);
            } catch (\Exception $ex) {
                dd('here',$ex);
                echo 2; exit;
                echo "<pre>";
                echo "PayPal Payout GetData:<br>". $ex->getData() . "<br><br>";
                exit(1);
            }

            echo "<pre>";
            
            print_r($output->getBatchHeader()->getPayoutBatchId());

            echo "<br>";echo "<br>";
            
            print_r($output); exit;

            /* paypal payouts */

        //     $userName = Auth::guard('company')->user()->name; 
        //     $email = $candidateDetails[0]->email;
        //     $name = $candidateDetails[0]->name;
        //     $body = "Milestone";
        //     $data = array('user'=>$userName, "name"=>$name ,"jobname"=>$jobDetail[0]['title']);

        //     // $status=  Mail::send('emails.milestone_change_status',$data, function($message) use ($name, $email,$body) {
        //     //         $message->to('sl@logixbuilt.com', 'Webfreelas')->subject('Milestone status changed')->setBody($body);
        //     //         $message->from('support@jobsportal.com','JobsPortal');
        //     // });
        //        $card = new \PayPal\Api\CreditCard();
        //     // $getcard = new \PayPal\Api\CreditCard();
        //      try {
        //      $response = $card->get("CARD-2W298408717656058L5HZHHI",$this->_api_context);
             
        //      echo "<pre>";
        //      print_r($response); exit;
        //     }
        //     catch (\PayPal\Exception\PayPalConnectionException $ex) {
        //       echo "error";
        //       echo $ex->getData(); exit;
        //         }
            
        //     flash(__('Milestone marked as completed successfully'))->success();
        // } else {
        //    flash(__('Something wrong... Please try again later'))->error();
        // }
    }
}

    public function paypalCustomerId($candidateId){
        $candidateDetails = Paypalcustomers::where('user_id', $candidateId)->get();
        if(!empty($candidateDetails->toArray())){
            
        } else {
            return 1;
        }
    }

    public function postcandidatecard_details(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'card_number' => 'required',
            'card_type' => 'required',
            'expire_year' => 'required',
            'expire_month' => 'required',
            'cvv' => 'required'
        ]);

        $data=$request->all();
        $milestoneDetails = Milestones::where('id', $data['milestone_id'])->get();

        $candidateDetails = User::where('id', $milestoneDetails[0]['candidate_id'])->get();
        $candidateId = $candidateDetails[0]->id;

        if(!empty($data)){
            $this->_api_context->setConfig(
                  array(
                      'log.LogEnabled' => true,
                      'log.FileName' => 'PayPal.log',
                      'log.LogLevel' => 'DEBUG'
                          )
                    );

                $card = new \PayPal\Api\CreditCard();
                $card->setNumber($data['card_number']);
                $card->setType($data['card_type']);
                $card->setExpireMonth($data['expire_month']);
                $card->setExpireYear($data['expire_year']);
                $card->setCvv2($data['cvv']);
                $card->setFirstName($data['first_name']);
                $card->setLastName($data['last_name']);

                 try {
                    $card->create($this->_api_context);
                    $customer_id = $card->id;
                    $user_id = $candidateId;
                    $createdBy = Auth::guard('company')->user()->id;
                    
                    $paypalCustomer = new Paypalcustomers();
                    $paypalCustomer->paypal_customer_id = $customer_id;
                    $paypalCustomer->user_id = $user_id;
                    $paypalCustomer->created_by = $createdBy;
                    $customer = $paypalCustomer->save();
                    if(!$customer){
                        flash(__('Something went wrong... Please try again later'))->error();
                        return \Redirect::route('add.paypalcustomer.form',$data['milestone_id']);
                    } else {
                        flash(__('Paypal customer created successfully'))->success();
                        return \Redirect::route('add.paypalcustomer.form',$data['milestone_id']);
                    }


                }
                catch (\PayPal\Exception\PayPalConnectionException $ex) {
                    flash(__('Something went wrong... Please try again later'))->error();
                    return \Redirect::route('add.paypalcustomer.form',$data['milestone_id']);
             }
        }

    }

    // Below function is added by hetal to list out the milestone of a job(86-96)
    public function list_milestones($job_id) {
        $job = Job::findOrFail($job_id);
        $company_id = Auth::guard('company')->user()->id;
        $milestones =  Milestones::where('company_id', $company_id)
                                ->where('job_id', $job_id)
                                ->get();

        return view('job.milestones_list')
                ->with('milestones', $milestones)
                ->with('job', $job);
    }
    
    // Below function is added by hetal to add a new Milestone (99-136)
    public function postMilestone(Request $request) {

        $request->validate([
            'task_details' => 'required',
            'price' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'freelancer' => 'required',
            'milestone_title' => 'required',
        ]);

        $data=$request->all(); 

        return redirect('milestone-payment-add')->with('post_data',$data);

       // return view('job.inc.milestone_payment_add')->with('post_data',$data);


       // return \Redirect::route('milestone.payment.add')->with('request_data',$request->all());


        // $title = $request['milestone_title'];
        // $taskDetails = $request['task_details'];
        // $price = $request['price'];
        // $startDate =  date("Y-m-d", strtotime($request['start_date']));
        // $endDate = date("Y-m-d", strtotime($request['end_date']));
        // $freelancer = $request['freelancer'];
        // $job_id = $request['job_id'];
        // $company_id = Auth::guard('company')->user()->id;

        // $milestones = new Milestones();

        // $milestones->candidate_id = $freelancer;
        // $milestones->milestone_title = $title;
        // $milestones->description = $taskDetails; 
        // $milestones->price = $price;
        // $milestones->start_date = $startDate;
        // $milestones->end_date = $endDate;
        // $milestones->job_id = $job_id;
        // $milestones->company_id = $company_id;

        //Start Add Payment Details :-




        //End Add Payment Details :-

        // if($milestones->save()){
        //    flash(__('You have successfully added milestone'))->success();
        // } else {
        //    flash(__('Something wrong!!! Please try again later'))->error();
        // }

        // return \Redirect::route('milestones.list', $job_id);
    }

    // public function createFrontJob (){
    //     return view('job.create_job');
    // }



}
