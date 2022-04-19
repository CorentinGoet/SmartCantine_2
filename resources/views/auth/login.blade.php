@extends('SmartCantine/layout_smart_cantine')

@section('smart_content')
    <section id="hero1" class="form-structor">
        <div class="container1" data-aos="zoom-out" data-aos-delay="100">
            <div class="">
            </div>
            <div class="login slide-up">

                <div class="center">
                    <h2 class="form-title" id="login"><span></span>Log in</h2>
                    <div class="form-holder">
                        <form method="POST" action={{route('login') }}>

                            <input name="email" id="email" type="email" class="input" placeholder="Email" />
                            <input name="password"  type="password" class="input" placeholder="Password" />
                        </form>



                    </div>
                    <div>
                        <button class="btn" value="submit">Log in</button>
                    </div>


                </div>
            </div>
        </div>
    </section>
