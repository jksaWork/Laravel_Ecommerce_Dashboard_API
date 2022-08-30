@extends('layouts.theme')

@section('content')
<div class="app-content">
    <!--====== Section 1 ======-->
    <div class="u-s-p-y-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="breadcrumb">
                    <div class="breadcrumb__wrap">
                        <ul class="breadcrumb__list">
                            <li class="has-separator">

                                <a href="index.html">Home</a>
                            </li>
                            <li class="is-marked">

                                <a href="signup.html">Signup</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section 1 ======-->


    <!--====== Section 2 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary">CREATE AN ACCOUNT</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->


        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row row--center">
                    <div class="col-lg-6 col-md-8 u-s-m-b-30">
                        <div class="l-f-o">
                            <div class="l-f-o__pad-box">
                                <h1 class="gl-h1">PERSONAL INFORMATION</h1>
                                <form class="l-f-o__form" method="post" action='{{ route('register_customer') }}'>
                                    @csrf
                                    <div class="gl-s-api">
                                        <div class="u-s-m-b-15">
                                            <button class="gl-s-api__btn gl-s-api__btn--fb" type="button"><i
                                                    class="fab fa-facebook-f"></i>

                                                <span>Signup with Facebook</span></button>
                                        </div>
                                        <div class="u-s-m-b-30">

                                            <button class="gl-s-api__btn gl-s-api__btn--gplus" type="button"><i
                                                    class="fab fa-google"></i>

                                                <span>Signup with Google</span></button>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-30">
                                        <label class="gl-label"for="reg-fname">FIRST NAME *</label>
                                        <input
                                        name='f_name'
                                        class="input-text input-text--primary-style" type="text" id="reg-fname"
                                            placeholder="First Name">
                                    </div>
                                    @error('f_name')
                                    <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                    @enderror
                                    <div class="u-s-m-b-30">
                                        <label class="gl-label" for="reg-lname">LAST NAME *</label>
                                        <input class="input-text input-text--primary-style" type="text" id="reg-lname"
                                        name='l_name'
                                        placeholder="Last Name">
                                    </div>
                                    @error('l_name')
                                    <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                      @enderror
                                    <div class="u-s-m-b-30">
                                        <label class="gl-label" for="reg-email">E-MAIL *</label>
                                        <input
                                        name='email'
                                        class="input-text input-text--primary-style" type="text" id="reg-email"
                                            placeholder="Enter E-mail">
                                    </div>
                                    @error('email')
                                    <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                      @enderror
                                      <div class="u-s-m-b-30">
                                        <label class="gl-label" for="reg-email">Phone *</label>
                                        <input
                                        name='phone'
                                        class="input-text input-text--primary-style" type="text" id="reg-email"
                                            placeholder="Enter E-mail">
                                    </div>
                                    @error('phone')
                                    <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                      @enderror

                                      <div class="u-s-m-b-30">

                                        <label

                                        class="gl-label" for="reg-password">PASSWORD *</label>

                                        <input
                                        name='password'
                                        class="input-text input-text--primary-style" type="text"
                                            id="reg-password" placeholder="Enter Password">
                                            @error('password')
                                            <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                              @enderror
                                        </div>
                                    <div class="u-s-m-b-15">

                                        <button class="btn btn--e-transparent-brand-b-2" type="submit">CREATE</button>
                                    </div>

                                    <a class="gl-link" href="/">Return to Store</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 2 ======-->
</div>
@endsection
