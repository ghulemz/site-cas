export default {
  init() {
    // JavaScript to be fired on all pages

    $("#gform_fields_2 option").filter(function(){ return $(this).text() === 'I am a';}).attr('disabled', 'disabled');
    $('.gfield_required').text('(required)');


    $('.yt-play').click(function(){
        var src_yt = $(this).parent('.yt-wrapper').attr('data-src');
        $(this).parent('.yt-wrapper').fadeOut(function(){
            $(this).replaceWith(`
              <div class="wrapper-media-banner media">
                <iframe height="360px" allow="autoplay" src="https://www.youtube.com/embed/`+ src_yt +`?rel=0&showinfo=0&autoplay=1" frameborder="0"></iframe>
              </div>
            `);
        });
    });

    $('#my-element').textfill();

    $('#owl-carousel-1').owlCarousel({
        items: 1,
        lazyLoad: true,
        dots: true,
    });

    $('.hamburger').on('click', function(e){
        $('.hamburger').toggleClass('is-active');
        e.preventDefault()
    })

      $('.search-wrapper .icofont-search').on('click', function(e){
          e.preventDefault();
          $(this).toggleClass('active');
          if($(this).hasClass('active')){
              $(this).siblings('#search').css({
                    "width": "300px",
                    "border-width": "1px",
                    "padding": "0 10px",
              });
              $(this).siblings('#search').focus();
          }else {
              $(this).siblings('#search').css({
                  "width": "0",
                  "border-width": "0",
                  "padding": "0",
              });
              $(this).siblings('#search').blur();
          }

      })

  },

  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
