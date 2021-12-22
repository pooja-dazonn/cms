<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use App\Models\user;
use App\Models\stockportfolio;
use App\Models\paymentmodel;
use App\Models\signupuser;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\leadsmodel;
use Illuminate\Support\Facades\Auth;



class customcontroller extends Controller
{
/////////////////**admin panel*//////////////////////////




 /**admin signin/signup page */
    public function login()
    {
        return view("auth.login");
    }
    public function registration()
    {
        return view("auth.registration");
    }
    public function registeruser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:12'
        ]);
        $user = new user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'you have registered seccessfuly');
        } else {
            return back()->with('fail', 'something wrong');
        }
    }
    public function loginuser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:12'
        ]);
        $user = user::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('index');
            } else {
                return back()->with('fail', 'Password not matches.');
            }
        } else {
            return back()->with('fail', 'This email is not registered.');
        }
    }
 /**admin index page */
    public function index()
    {
        return view('admin/index');
    }
    public function manageinvestments()
    {
        return view('admin/manageinvestments');
    }
    public function userwithdrawal()
    {
        return view('admin/userwithdrawal');
    }
    public function package()
    {
        return view('admin/package');
    }
    public function viewleads()
    {
        
        $data = array(
            'item'=>DB::table('leadsmodels')->get()
        );
        return view('admin/viewleads', $data);

    }
    public function manageuser()
    {
        return view('pages/manageuser');
    }
  
  
    public function addlead()
    {
        return view('user/addlead');
    }
    function addData(Request $req)
    {
        $lead= new leadsmodel;
        $lead->name=$req->name;
        $lead->email=$req->email;
        $lead->mobile=$req->mobile;
        $lead->city=$req->city;
        $lead->category=$req->category;
        $lead->subcategory=$req->subcategory;
        $lead->product=$req->product;
        $lead->save();
    }
    
   
   
////////////////**user Panel*///////////////////////////

/**user loguser page */
public function navbar()
{
   return view('user/navbar');
} 

   
   
/**user loguser page */
public function loguser()
{
   return view('user/loguser');
} 

public function loged(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8|max:12'
    ]);
    $user = signupuser::where('email', '=', $request->email)->first();
    if ($user) {
        if (Hash::check($request->password, $user->password)) {
            $request->session()->put('loginId', $user->id);
            return redirect('indexuser');
        } else {
            return back()->with('fail', 'Password not matches.');
        }
    } else {
        return back()->with('fail', 'This email is not registered.');
    }
}
/**user reguser page */
public function reguser()
{
   return view('user/reguser');
} 
public function signinuser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:signupusers',
            'password' => 'required|min:8|max:12'
        ]);
        $user = new signupuser();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'you have registered seccessfuly');
        } else {
            return back()->with('fail', 'something wrong');
        }
    }
    /**user indexuser page */
    public function indexuser()
    {
        $data = array(
            'item'=>DB::table('stockportfolios')->get()
        );
       return view('user/indexuser', $data);
    } 

/** add leadform data */
function addindexuserformData(Request $req)
{
    $lead = new leadsmodel;
    $lead->name = $req->name;
    $lead->email = $req->email;
    $lead->mobile = $req->mobile;
    $lead->city = $req->city;
    $lead->category = $req->category;
    $lead->subcategory = $req->subcategory;
    $lead->product = $req->product;
    $lead->save();
    if ($req) {
        return back()->with('success', 'Your Inoformation Submit Successfully THANKU ');
    } else {
        return redirect('Not Register');
    }
   }


 /**user index page */
    public function userindex()
    {
       /* $data = array(
            'item'=>DB::table('stockportfolios')->get()
        );*/
       return view('user/userindex');
    } 
    
       /**user stockmove page */
    public function stockmove()
    {
        $data = array(
            'item'=>DB::table('stockportfolios')->get()
        );
        return view('user/stockmove', $data);
    }  
     /**user stockpayment page */
    public function stockpayment()
    {
        $data = array(
            'item'=>DB::table('stockportfolios')->get()
        );
        return view('user/stockpayment', $data);
    } 
    /**user millarsportfolio page */
    public function millarsportfolio()
    {
        $data = array(
            'item'=>DB::table('stockportfolios')->get()
        );
        return view('user/millarsportfolio',$data);
    } 

 /**user millarspayment page */
 public function millarspayment()
 {
   
$data = array(
    'list'=>DB::table('paymentmodels')
     ->whereIn('id',[5])
     ->get()
);
     return view('user/millarspayment',$data);
 }
 
/**user millarspaymentregistered page */
 public function regmillarspayment(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:signupusers',
            'password' => 'required|min:8|max:12'
        ]);
        $user = new signupuser();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'you have registered seccessfuly');
        } else {
            return back()->with('fail', 'something wrong');
        }
    }
    /**user millarspaymentloginpagepayment page */
    public function signinmillarspayment(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8|max:12'
    ]);
    $user = signupuser::where('email', '=', $request->email)->first();
    if ($user) {
        if (Hash::check($request->password, $user->password)) {
            $request->session()->put('loginId', $user->id);
            return redirect('millarspayment');
        } else {
            return back()->with('fail', 'Password not matches.');
        }
    } else {
        return back()->with('fail', 'This email is not registered.');
    }
}
/**payusr page
 public function paymillars()
 {
     $data =array(
    'list'=>DB::table('paymentmodels')
    ->whereIn('id',[5])
    ->get()
 );
     return view('user/paymillars', $data);
    }*/

/**user marketleads page */
 public function marketleads()
 {
      $data = array(
        'item'=>DB::table('stockportfolios')->get()
    );
     return view('user/marketleads',$data);
 }
 /**marketleads add leadform data */
 function addformData(Request $req)
 {
     $lead = new leadsmodel;
     $lead->name = $req->name;
     $lead->email = $req->email;
     $lead->mobile = $req->mobile;
     $lead->city = $req->city;
     $lead->category = $req->category;
     $lead->subcategory = $req->subcategory;
     $lead->product = $req->product;
     $lead->save();
     if ($req) {
         return back()->with('success', 'Your Inoformation Submit Successfully THANKU ');
     } else {
         return redirect('Not Register');
     }
    }

 /**user marketleadspayment page */
 public function marketleadspayment()
 {
     return view('user/marketleadspayment');
 }

 /**user razerpay page */
 public function razerpay()
 {
     return view('user/razerpay');
 }
 public function razerpayment(Request $request)
 {
     $input = $request->all();

     $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

     $payment = $api->payment->fetch($input['razorpay_payment_id']);

     if(count($input)  && !empty($input['razorpay_payment_id'])) {
         try {
             $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 

         } catch (Exception $e) {
             return  $e->getMessage();
             Session::put('error',$e->getMessage());
             return redirect()->back();
         }
     }
       
     Session::put('success', 'Payment successful');
     return redirect()->back();
 }


   
}
