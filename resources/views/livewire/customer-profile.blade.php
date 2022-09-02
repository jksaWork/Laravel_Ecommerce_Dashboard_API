<div>
    @if(!$editMyProfile)
    <div class="">
        <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
            <div class="dash__pad-2">
                <h1 class="dash__h1 u-s-m-b-14">My Profile</h1>
                <span class="dash__text u-s-m-b-30">Look all your info, you could customize your profile.</span>
                <div class="row">
                    <div class="col-lg-4 u-s-m-b-30">
                        <h2 class="dash__h2 u-s-m-b-8">Full Name</h2>
                        <span class="dash__text">{{ auth()->user()->name }}</span>
                    </div>
                    <div class="col-lg-4 u-s-m-b-30">
                        <h2 class="dash__h2 u-s-m-b-8">E-mail</h2>

                        <span class="dash__text">{{ auth()->user()->email }}</span>
                        <div class="dash__link dash__link--secondary">

                            <a href="#">Change</a></div>
                    </div>
                    <div class="col-lg-4 u-s-m-b-30">
                        <h2 class="dash__h2 u-s-m-b-8">Phone</h2>

                        <span class="dash__text">{{ auth()->user()->phone }}</span>
                        <div class="dash__link dash__link--secondary">

                            <a href="#">Add</a></div>
                    </div>
                    <div class="col-lg-4 u-s-m-b-30">
                        <h2 class="dash__h2 u-s-m-b-8">Join Date</h2>

                        <span class="dash__text">{{  auth()->user()->created_at->format('Y-M-D')  }}</span>
                    </div>
                    <div class="col-lg-4 u-s-m-b-30">
                        <h2 class="dash__h2 u-s-m-b-8">Gender</h2>
                        <span class="dash__text">Male</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                 <div class="u-s-m-b-16">
                            <a class="dash__custom-link btn--e-transparent-brand-b-2" href="javascript::void()" wire:click='EditProfile()'>Edit Profile</a></div>
                        <div>
                            <a class="dash__custom-link btn--e-brand-b-2" href="#">Change Password</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="">
        <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
            <div class="dash__pad-2">
                <h1 class="dash__h1 u-s-m-b-14">Edit Profile</h1>

                <span class="dash__text u-s-m-b-30">Looks like you haven't update your profile</span>
                <div class="dash__link dash__link--secondary u-s-m-b-30">

                    <a data-modal="modal" data-modal-id="#dash-newsletter">Subscribe Newsletter</a></div>
                <div class="row">
                    <div class="col-lg-12">
                        <form class="dash-edit-p">
                            <div class="gl-inline">
                                <div class="u-s-m-b-30">

                                    <label class="gl-label" for="reg-fname">FIRST NAME *</label>

                                    <input  wire:model='f_name' class="input-text input-text--primary-style" type="text" id="reg-fname" placeholder="John">
                                    @error('f_name')
                                    <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="u-s-m-b-30">
                                    <label class="gl-label"  for="reg-lname">LAST NAME *</label>
                                    <input wire:model='l_name' class="input-text input-text--primary-style" type="text" id="reg-lname" placeholder="Doe"></div>
                                    @error('l_name')
                                    <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                    @enderror
                                </div>
                            <div class="gl-inline">
                                <div class="u-s-m-b-30">
                                    <label class="gl-label" wire:model='gender' for="gender">GENDER</label><select class="select-box select-box--primary-style u-w-100" id="gender">
                                        <option selected="">Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    @error('gender')
                                    <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="gl-inline">
                                <div class="u-s-m-b-30">
                                    <h2 class="dash__h2 u-s-m-b-8">E-mail</h2>
                                    <input wire:model='email' class="input-text input-text--primary-style" type="text" id="reg-lname" placeholder="Doe">
                                    @error('email')
                                    <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                    @enderror
                                    <div class="dash__link dash__link--secondary">
                                       </div>
                                </div>
                                <div class="u-s-m-b-30">
                                    <h2 class="dash__h2 u-s-m-b-8">Phone</h2>
                                    <input wire:model='phone' class="input-text input-text--primary-style" type="text" id="reg-lname" placeholder="Doe">
                                    {{-- <span class="dash__text">Please enter your mobile</span> --}}
                                    @error('phone')
                                    <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                    @enderror
                                    <div class="dash__link dash__link--secondary">
                                        </div>
                                </div>
                            </div>

                            <button class="btn btn--e-brand-b-2" type="button" wire:click='UpdateProfile'>SAVE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
