<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ url('/') }}" class="sidebar-brand">
            Contract<span>Form</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Manage</li>
            {{-- <!-- <li class="nav-item">
                <a href="{{ url('/admin/roles') }}" class="nav-link">
            <i class="link-icon" data-feather="shield"></i>
            <span class="link-title">Roles</span>
            </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/permissions') }}" class="nav-link">
                    <i class="link-icon" data-feather="unlock"></i>
                    <span class="link-title">Permissions</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/users') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('internet_home.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Internet Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/internet_home/create/?lang=fr') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Internet Home (French)</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/internet_home/create/?lang=du') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Internet Home (Dutch)</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('mobile_phone.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Mobile Phone</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/mobile_phone/create/?lang=fr') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Mobile Phone (French)</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/mobile_phone/create/?lang=du') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Mobile Phone (Dutch)</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('number_porting.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Mobile number(s) porting</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('number_porting_du.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Mobile number(s) porting (Dutch)</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('electricity_natural_gas.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Electricity And Natural Gas</span>
                </a>
            </li> --> --}}
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#orange" role="button" aria-expanded="false"
                   aria-controls="orange">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">Orange</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="orange">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('internet_tv.index') }}" class="nav-link">Internet + TV</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('internet_home.index') }}" class="nav-link">Internet Home (FR)</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('internet_home_du.index') }}" class="nav-link">Internet Home
                        (DU)</a>
            </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('mobile_phone.index') }}" class="nav-link">Mobile Phone</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('number_porting.index') }}" class="nav-link">Number Porting</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('number_porting_du.index') }}" class="nav-link">Number Porting
                                Dutch</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#telnet" role="button" aria-expanded="false"
                   aria-controls="telnet">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">Telenet</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="telnet">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('telenet_new_subs.index') }}" class="nav-link">MNP
                                overdrachtsformulier Telenet (nieuwe abonnementen)</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('telenet_question.index') }}" class="nav-link">Telenet contract
                                (nieuwe abonnementen)</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contractapp.index') }}" class="nav-link">Telenet Contract
                                Aanvraag</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--  Scarlet  -->
            {{-- Proximus --}}
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#proximus" role="button" aria-expanded="false"
                   aria-controls="proximus">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">Proximus</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="proximus">
                    <ul class="nav sub-menu">

                        <li class="nav-item">
                            <a href="{{ route('proximus_connection_request_du.index') }}"
                               class="nav-link">Connection Request
                                DU</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('proximus_connection_request_fr.index') }}"
                               class="nav-link">Connection Request
                                FR</a>
                        </li>
                    </ul>
                </div>

            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#application_form" role="button" aria-expanded="false"
                   aria-controls="application_form">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">Scarlet</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="application_form">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('application_form.index') }}" class="nav-link">Formulaire de demande</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse" id="application_form">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('mobile_application_form.index') }}" class="nav-link">Mobile Formulaire de
                                demande</a>
                        </li>
                    </ul>
                </div>

            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#regi_form" role="button" aria-expanded="false"
                   aria-controls="regi_form">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">Octa +</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="regi_form">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('regi_form.index') }}" class="nav-link">Registration Form</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#number_request" role="button" aria-expanded="false"
                   aria-controls="number_request">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">Base</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="number_request">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('number_request.index') }}" class="nav-link">Number Retention Form</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse" id="number_request">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('subscription_request.index') }}" class="nav-link">Subscription Request
                                Form</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- End Scarlet -->

        <!-- <li class="nav-item">
                <a href="{{ route('engie.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Contract Professionele Klanten</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('pad_services.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">PAD Services(incomplete)</span>
                </a>
            </li> -->


        </ul>
    </div>
</nav>
