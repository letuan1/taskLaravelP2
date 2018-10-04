@extends('layouts.base')

@section('content')

    <div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
        <div class="container-contact3">
            <div class="wrap-contact3">
                <form class="contact3-form validate-form" method="post" action="{{ route('updateData', $data['id']) }}">
                    {{ csrf_field() }}
                    <span class="contact3-form-title">
						Update
					</span>

                    <div class="wrap-input3 validate-input" data-validate="Name is required">
                        <input class="input3" type="text" name="id" value="{{ $data['id'] }}">
                        <span class="focus-input3"></span>
                        @if ($errors->any())
                            <ul>
                                <li style="color: darkgreen">{{ $errors->first('id') }}</li>
                            </ul>
                        @endif
                    </div>

                    <div class="wrap-input3 validate-input" data-validate="Name is required">
                        <input class="input3" type="text" name="name" value="{{ $data['name'] }}">
                        <span class="focus-input3"></span>
                        @if ($errors->any())
                            <ul>
                                <li style="color: darkgreen">{{ $errors->first('name') }}</li>
                            </ul>
                        @endif
                    </div>

                    <div class="wrap-input3 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input3" type="text" name="email" value="{{ $data['email'] }}">
                        <span class="focus-input3"></span>
                        @if ($errors->any())
                            <ul>
                                <li style="color: darkgreen">{{ $errors->first('email') }}</li>
                            </ul>
                        @endif
                    </div>

                    <div class="wrap-input3 validate-input" data-validate="Message is required">
                        <input class="input3" name="phone" value="{{ $data['phone'] }}"></input>
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


    </body>
    </html>

@endsection