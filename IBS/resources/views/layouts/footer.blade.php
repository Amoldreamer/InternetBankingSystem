<footer id="footer">
                <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}"/>
        @if(url()->current()!= 'http://127.0.0.1/blog/public' && url()->current()!='http://127.0.0.1/blog/public/admin/login')
        <div style="margin-left:150px;">
         <div style="color:white; margin-left:50px; float:left; ">
             
             <P>CONTACT INFO</P>
             <h6>Address: No.XXXXXX street</h6>
             <h6>Mars City, Country</h6>
             <h6>Mobile:(123)456-7890</h6>
             <h6>Phone:(123)456-7890</h6>
             <h6>Email:</h6>

             
            
         </div>
         <div style="color:white; margin-left:50px; float:left;">
                 
                 <p>MODULES</p>
                 <h6>User Module</h6>
                 <h6>Login Module</h6>
                 <h6>Account Module</h6>
                 <h6>Transaction Module</h6>
                 <h6>Transfer Module</h6>
         </div>
         <div style="color:white; margin-left:50px; margin-right:100px; float:left;">
                 
                 <p>PROJECT LINKS</p>
                 <h6>Home</h6>
                 <h6>About Us</h6>
                 <h6>Contact</h6>
                 <h6>Login</h6>
                 <h6>Email Us</h6>
         </div>
         <div style="color:white; margin-left:50px; float:left;">
                 
                 <p>ABOUT PROJECT</p>
                 <h6>Online banking, also known as internet</br> banking, is an electronic payment
                 </br> system that enables customers of a bank</br> or other financial institution to
                 conduct</br> a range of financial transactions through</br> the financial institution's website.</h6>
                 
         </div>
     </div>
     @endif
    </footer>