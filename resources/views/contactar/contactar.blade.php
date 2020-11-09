@extends('layouts.master')

@section('content')

<!-- Contact -->
<div id="contact" class="form-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Contactar con velisol</h2>
                <ul class="list-unstyled li-space-lg">
                    <li class="address">No dude en llamarnos o enviarnos un mensaje de formulario de contacto, nosotros le contestaremos a la brevedad.</li>
                    <li><i class="fas fa-map-marker-alt"></i>Sinaloa de leyva, Sinaloa, mexico.</li>
                    <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:003024630820">+52 687-189-6128</a></li>
                    <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:contacto@velisol.com">contacto@velisol.com</a></li>
                </ul>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14365.673449871234!2d-108.22546079655761!3d25.822756151315936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1604905027815!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div> <!-- end of col -->
            <div class="col-lg-6">
                
                <!-- Contact Form -->
                <form id="contactForm" data-toggle="validator" data-focus="false">
                    <div class="form-group">
                        <input type="text" class="form-control-input" id="cname" required>
                        <label class="label-control" for="cname">Nombre</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control-input" id="cemail" required>
                        <label class="label-control" for="cemail">Correo electrónico</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control-textarea" id="cmessage" required></textarea>
                        <label class="label-control" for="cmessage">Tu mensaje</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group checkbox">
                    <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>He leído y acepto la <a href="#">Política de privacidad</a> y los <a href="#">Términos y condiciones establecidos por velisol</a> 
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button" disabled>ENVIAR MENSAJE</button>
                    </div>
                    <div class="form-message">
                        <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                    </div>
                </form>
                <!-- end of contact form -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of form-2 -->
<!-- end of contact -->
    
@endsection