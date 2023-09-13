

<div>
    <form action="paypal" method="POST" class=" p-5 rounded donation-form" data-aos="fade-up">
        @csrf
        <h3> Donation Form</h3>
</div>
<div class="field-icon">
    <span>$</span>
    <input type="text" placeholder="0.00" id="cont" class="form-control px-4" name="price" value="1.00">
</div>


<input type="submit" value="Paypal" class="btn btn-primary w-100" style="color: white ; background-color : #54ac75">







</form>


<form action="stripe/1" class="  rounded donation-form" method="post" style="padding: 0px 50px">
    @csrf
    <h3 for=""
        style=" margin:0;    font-weight: bold;
                                margin-bottom: 0px;
                                text-transform: uppercase;
                                font-size: 18px;">
        Or donate by Visa</h3> <br>

    <input type="text" placeholder="0.00" class="form-control px-4" name="price" value="{{ old('price') }}"
        required>



    <input type="submit" value="visa" class="btn btn-primary w-100"
        style="color: white ; background-color : #54ac75">




</form>


</div>