@extends('layouts.base')

@section('content')
    <div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
        <div class="container-contact3">
            <div class="wrap-contact3">
                <form class="contact3-form validate-form" method="post" action="{{ route('addData') }}">
                    {{ csrf_field() }}
                    <span class="contact3-form-title">
						Insert
					</span>

                    <div class="wrap-input3 validate-input" data-validate="Name is required">
                        <input class="input3" type="text" name="name" placeholder="Your Name">
                        <span class="focus-input3"></span>
                        @if ($errors->any())
                            <ul>
                                <li style="color: darkgreen">{{ $errors->first('name') }}</li>
                            </ul>
                        @endif
                    </div>

                    <div class="wrap-input3 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input3" type="text" name="email" placeholder="Your Email">
                        <span class="focus-input3"></span>
                        @if ($errors->any())
                            <ul>
                                <li style="color: darkgreen">{{ $errors->first('email') }}</li>
                            </ul>
                        @endif
                    </div>

                    <div class="wrap-input3 validate-input" data-validate="Message is required">
                        <textarea class="input3" name="phone" placeholder="phone"></textarea>
                        <span class="focus-input3"></span>
                        @if ($errors->any())
                            <ul>
                                <li style="color: darkgreen">{{ $errors->first('phone') }}</li>
                            </ul>
                        @endif
                    </div>

                    <div class="container-contact3-form-btn">
                        <button class="contact3-form-btn">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection