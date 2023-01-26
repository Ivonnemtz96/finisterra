<!-- Start Subheader -->
<div class="normal-bg subheader" style="background-image: url('/assets/images/contacto.jpg?=1');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="subheader-content">
                    <h1 class="page-title text-custom-white fw-600">Contáctanos</h1>
                    <ul class="custom-flex breadcrumb">
                        <li><a href="/">Inicio</a></li>
                        <li>Contacto</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Subheader -->
<!-- Start contact detail -->
<section class="section-padding">
    <div class="container">
        <div class="section-header">
            <div class="section-heading">
                <h6 class="text-orange mb-xl-10 sub-heading"><span>Contáctanos</span></h6>
                <h3 class="text-blue fw-700 title">Encuéntranos aquí también<span class="text-orange">.</span></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box mb-md-30">
                    <div class="icon text-orange">
                        <i class="fal fa-map"></i>
                    </div>
                    <h3 class="fw-600">Direción</h3>
                    <a href="https://goo.gl/maps/aZnozq5q7RUELbMy9" class="fw-500 fs-16">
                        Paseo de los Marinos, S/N Colonia Chamizal, San José del Cabo, B.C.S.
                        <a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box mb-md-30">
                    <div class="icon text-orange">
                        <i class="fal fa-phone"></i>
                    </div>
                    <h3 class="fw-600">Teléfono</h3>
                    <a href="tel:+526241555762" class="fw-500 fs-16">+52 624 155 5762</a> <br><br><br><br>
                    <!-- <a href="tel:" class="fw-500 fs-16">765 648 567 98</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box">
                    <div class="icon text-orange">
                        <i class="fal fa-globe"></i>
                    </div>
                    <h3 class="fw-600">Correo</h3>
                    <a href="mailto:info@finisterraappraisals.com" class="fw-500 fs-16">info@finisterraappraisals.com</a>
                    <br><br><br><br>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact detail -->

<!-- Start contact form -->
<div class="section-padding-top">
    <div class="container">
        <div class="col-12">
            <div class="contact-form">
                <form action="/php/contact.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group group-form">
                                <input type="text" name="empresa" class="form-control form-control-custom"
                                    placeholder="Nombre de la empresa" />
                                <span class="icon">
                                    <i class="fal fa-suitcase"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group group-form">
                                <input type="text" name="nombre" class="form-control form-control-custom"
                                    placeholder="Nombre *" />
                                <span class="icon">
                                    <i class="fal fa-user"></i>
                                </span>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group group-form">
                                <input type="text" name="apellidos" class="form-control form-control-custom"
                                    placeholder="Apellidos *" />
                                <span class="icon">
                                    <i class="fal fa-user"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group group-form">
                                <input type="text" name="email" class="form-control form-control-custom"
                                    placeholder="Email *" />
                                <span class="icon">
                                    <i class="fal fa-envelope"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group group-form">
                                <input type="text" name="tel" class="form-control form-control-custom"
                                    placeholder="Teléfono *" />
                                <span class="icon">
                                    <i class="fal fa-phone-alt"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group group-form">
                                <input type="text" name="ubicacion" class="form-control form-control-custom"
                                    placeholder="Ubicación del Avalúo/Servicio *" />
                                <span class="icon">
                                    <i class="fal fa-phone-alt"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group group-form">
                                <input type="text" name="tipo" class="form-control form-control-custom"
                                    placeholder="Tipo de servicio *" />
                                <span class="icon">
                                    <i class="fal fa-phone-alt"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group group-form">
                                <textarea name="msj" class="form-control form-control-custom"></textarea>
                                <span class="icon">
                                    <i class="fal fa-pencil-alt"></i>
                                </span>
                            </div>
                        </div>

                            <div class="col-12 col-md-12 text-center mb-5 mt-5">
                                <div class="g-recaptcha" data-sitekey="6Lf92OAfAAAAAEy9m8sf2kbU0ojkdDs5CNOnaNYS" required></div>
                            </div>

                        
                        <div class="col-12 text-center">
                            <p style="color: #7b7b7b;">
                                Avaluos Finisterra necesita la información de contacto que nos proporcionas para
                                ponernos en contacto contigo acerca de nuestros productos y servicios. Puedes darte de
                                baja de estas comunicaciones en cualquier momento. Para obtener información sobre cómo
                                darte de baja, así como nuestras prácticas de privacidad y el compromiso de proteger tu
                                privacidad, consulta nuestra Política de privacidad. <br><br>
                            </p>
                            <button type="submit" class="theme-btn btn-orange">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End contact form -->
<!-- Start Map -->
<div class="contact-map">
    <iframe title="contact map" class="image-fit"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.0355568262225!2d-109.70965923473926!3d23.059157970745495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86af508175f71d53%3A0x758653a320a666f5!2sP.%C2%BA%20de%20los%20Marinos%2C%20Mauricio%20Castro%2C%2023443%20San%20Jos%C3%A9%20del%20Cabo%2C%20B.C.S.!5e0!3m2!1ses-419!2smx!4v1674590540904!5m2!1ses-419!2smx&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed">
    </iframe>

</div>
<!-- Start Map -->