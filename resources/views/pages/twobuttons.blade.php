{{-- @extends('layouts.master') --}}
<style>
body {
	height: 90vh;
	background: #19092d;
	display: flex;
	justify-content: center;
	align-items: center;
}

a{
	margin: 20px;
	padding: 40px 80px;
	text-decoration: none;
	cursor: pointer;
    /* tex */
}

/* PIERWSZY SPOSOB WYKORZYSTANIE CIENIA */
.first{
	background: #19c3d6;
	box-shadow: inset 0px 0px 0px 0px #ff0099;
	transition: all 0.5s ease-in-out;
}
.first:hover{
	box-shadow: inset 0px -200px 0px 0px #ff0099;
}

/* DRUGI SPOSOB DLUZSZY ALE BARDZIEJ UNIWERSALNY*/
.sec{
	background: none;
	position: relative;
	overflow: hidden;
}

.sec:before, .sec:after{
	content: "";
	background: #19c3d6;
	display: block;
	position: absolute;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	z-index: -2;
}
.sec:after{
	background: #ff0099;
	top: 100%;
	transition: all 0.5s ease-in-out;
}
.sec:hover:after{
	top: 0;
}</style>
{{-- @section('content') --}}
    <a href="{{ route('kidspricing') }}" class="first">Kids</a>
<a href="{{ route('employpricing') }}" class="sec">Employee</a>
{{-- @endsection --}}