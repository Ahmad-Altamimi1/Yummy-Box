 
 @extends('layouts.master')
 @section('content')
     
 <style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap');

// Formatting Styles
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

hr {
	margin: 20px 0;
	border: none;
	border-bottom: 1px solid #d9d9d9;
}
label,
input {
	cursor: pointer;
}
h2,
h3,
h4,
h5 {
	font-weight: 600;
	line-height: 1.3;
	color: #1f2949;
}
h2 {
	font-size: 24px;
}
h3 {
	font-size: 18px;
}
h4 {
	font-size: 14px;
}
h5 {
	font-size: 12px;
	font-weight: 400;
}
img {
	max-width: 100%;
	display: block;
	vertical-align: middle;
}
.container {
	max-width: 99vw;
	margin: 15px auto;
	padding: 0 15px;
}

.top-text-wrapper {
	margin: 20px 0 30px 0;
}
.top-text-wrapper h4 {
	font-size: 24px;
	margin-bottom: 10px;
}
.top-text-wrapper code {
	font-size: 0.85em;
	background: linear-gradient(90deg, #fce3ec, #ffe8cc);
	color: #ff2200;
	padding: 0.1rem 0.3rem 0.2rem;
	border-radius: 0.2rem;
}
.tab-section-wrapper {
	padding: 30px 0;
}

.grid-wrapper {
	display: grid;
	grid-gap: 30px;
	place-items: center;
	place-content: center;
}

.grid-col-auto {
	 grid-template-columns: repeat(auto-fill, minmax(200px, 0.1fr));
	/* grid-auto-flow: column; */
	grid-template-rows: auto;
    position:relative;
    padding: 0 10%;
}

/* ******************* Main Styeles : Radio Card */

/* $#3057d5: #3057d5; */
/* 200ms linear: 200ms linear; */
/* Styles for label with class 'radio-card' */
label.radio-card {
  cursor: pointer;
}

/* Styles for elements with class 'card-content-wrapper' inside the label */
label.radio-card .card-content-wrapper {
  background: #fff;
  border-radius: 5px;
      max-width: 261px;
    /* min-height: 263px; */
    height: 202px;

  padding: 15px;
  display: grid;
  box-shadow: 0 2px 4px 0 rgba(219, 215, 215, 0.04);
  transition: 200ms linear;
}

/* Styles for elements with class 'check-icon' inside the label */
label.radio-card .check-icon {
  width: 20px;
  height: 20px;
  display: inline-block;
  border: solid 2px #e3e3e3;
  border-radius: 50%;
  transition: 200ms linear;
  position: relative;
}

/* Styles for 'before' pseudo-element inside elements with class 'check-icon' */
label.radio-card .check-icon:before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg width='12' height='9' viewBox='0 0 12 9' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0.93552 4.58423C0.890286 4.53718 0.854262 4.48209 0.829309 4.42179C0.779553 4.28741 0.779553 4.13965 0.829309 4.00527C0.853759 3.94471 0.889842 3.88952 0.93552 3.84283L1.68941 3.12018C1.73378 3.06821 1.7893 3.02692 1.85185 2.99939C1.91206 2.97215 1.97736 2.95796 2.04345 2.95774C2.11507 2.95635 2.18613 2.97056 2.2517 2.99939C2.31652 3.02822 2.3752 3.06922 2.42456 3.12018L4.69872 5.39851L9.58026 0.516971C9.62828 0.466328 9.68554 0.42533 9.74895 0.396182C9.81468 0.367844 9.88563 0.353653 9.95721 0.354531C10.0244 0.354903 10.0907 0.369582 10.1517 0.397592C10.2128 0.425602 10.2672 0.466298 10.3112 0.516971L11.0651 1.25003C11.1108 1.29672 11.1469 1.35191 11.1713 1.41247C11.2211 1.54686 11.2211 1.69461 11.1713 1.82899C11.1464 1.88929 11.1104 1.94439 11.0651 1.99143L5.06525 7.96007C5.02054 8.0122 4.96514 8.0541 4.90281 8.08294C4.76944 8.13802 4.61967 8.13802 4.48630 8.08294C4.42397 8.05410 4.36857 8.01220 4.32386 7.96007L0.93552 4.58423Z' fill='white'/%3E%3C/svg%3E%0A");
  background-repeat: no-repeat;
  background-size: 12px;
  background-position: center center;
  transform: scale(1.6);
  transition: 200ms linear;
  opacity: 0;
}

/* Reset the radio button appearance */
input[type='radio'] {
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}

/* Apply styles when the radio button is checked */
input[type='radio']:checked + .card-content-wrapper {
  box-shadow: 0 2px 4px 0 rgba(219, 215, 215, 0.5), 0 0 0 2px #60be74;
}

input[type='radio']:checked + .card-content-wrapper .check-icon {
  background: #60be74;
  border-color: #60be74;
  transform: scale(1.2);
}

input[type='radio']:checked + .card-content-wrapper .check-icon:before {
  transform: scale(1);
  opacity: 1;
}

/* Apply styles when the radio button is focused */
input[type='radio']:focus + .card-content-wrapper .check-icon {
  box-shadow: 0 0 0 4px rgba(48, 86, 213, 0.2);
  border-color: #3056d5;
}

/* Additional styles for .card-content elements */
.card-content img {
 margin-bottom: 10px;
    width: 100%;
    height: 130px;
}

.card-content h4 {
  font-size: 16px;
  letter-spacing: -0.24px;
  text-align: center;
  color: #1f2949;
  margin-bottom: 10px;
}

.card-content h5 {
  font-size: 14px;
  line-height: 1.4;
  text-align: center;
  color: #686d73;
}
.day{
    position: absolute;
    top: -26px;
    left: 26px;
    color: yellow;
    font-size: 27px;
}
/* } */

 </style>
 <div class="allselected">
    
    <form action="{{ route('Doneselect') }}" method="get">
     @foreach ($days as $day)
     <span style="color:red;disply:inline-block ;margin-left:4px" >
                    @error( $day->day )
                        {{ $message }}
                    @enderror
                </span>
 <div class="grid-wrapper grid-col-auto" style="margin-top:80px">
        
    <p class="day">{{ $day->day }}</p>
    {{-- @dd($day->products) --}}
    @foreach ($day->products as $product)
        
          <label for="radio-card-{{ $product->id }}" class="radio-card">
            <input type="radio" name="{{ $day->day }}" id="radio-card-{{ $product->id }}" value="{{ $product->id }}" />
            <div class="card-content-wrapper">
              <span class="check-icon"></span>
              <div class="card-content">
                <img
                  src="../{{ $product->img }}"
                  alt=""
                />
                <h4>{{ $product->name }}</h4>
                <h5>{{ $product->shortDescription  }}</h5>
              </div>
            </div>
          </label>
    @endforeach

          <!-- /.radio-card -->

        
 </div>
    @endforeach

 </div>
 <input type="submit" value="Done">
</form>
@endsection
