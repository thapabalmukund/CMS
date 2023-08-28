   @extends('Frontend.Layouts.main')
     @section ('main-container')
    <!-- client section start -->
      <div class="clients_section layout_padding">
         <div class="container">
            <h1 class="client_text"><strong>WHAT IS SAY CLIENTS</strong></h1>
            <p class="client_long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum </p>
            <div class="clients_section_2">
               <div id="my_carousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#my_carousel" data-slide-to="0" class="active"></li>
                     <li data-target="#my_carousel" data-slide-to="1"></li>
                     <li data-target="#my_carousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12 col-lg-2">
                              <div class="client_img"><img src="images/client-img.png"></div>
                              <h2 class="henrry_text">Henrry Jo</h2>
                              <p class="henrry_taital">(long established)</p>
                           </div>
                           <div class="col-sm-12 col-lg-10">
                              <div class="img_5"><img src="images/img-6.png"></div>
                              <p class="client_lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12 col-lg-2">
                              <div class="client_img"><img src="images/client-img.png"></div>
                              <h2 class="henrry_text">Henrry Jo</h2>
                              <p class="henrry_taital">(long established)</p>
                           </div>
                           <div class="col-sm-12 col-lg-10">
                              <div class="img_5"><img src="images/img-6.png"></div>
                              <p class="client_lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12 col-lg-2">
                              <div class="client_img"><img src="images/client-img.png"></div>
                              <h2 class="henrry_text">Henrry Jo</h2>
                              <p class="henrry_taital">(long established)</p>
                           </div>
                           <div class="col-sm-12 col-lg-10">
                              <div class="img_5"><img src="images/img-6.png"></div>
                              <p class="client_lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section end -->
      @endsection