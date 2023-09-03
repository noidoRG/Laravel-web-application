@extends('template')
@section('title') <title>Фотоальбом</title> @endsection

@section('script') <script defer src="{{ asset('js/album.js') }}"></script> @endsection
  
@php $imageBaseUrl = asset('img/album/'); @endphp
@section('section')

<section class="album">   
    <h1> Фотоальбом </h1>
    <div id="album-grid">
      @foreach ($photos as $index => $photoData)
      <img
          src="{{ asset('img/album/' . $photoData['filename']) }}"
          title="{{ $photoData['caption'] }}"
          alt="{{ $index + 1 }}"
          style="z-index: 200"
      >
      @endforeach
    </div>
    <script defer>
      let directory = "{{ $imageBaseUrl }}/";
      let filenames = new Array();
      let captions = new Array();
      var album_photos = @json($photos);
      for (var i = 0; i < album_photos.length; i++) {
        filenames.push(album_photos[i].filename);
        captions.push(album_photos[i].caption);
      }
      
      main();

      function main() {
        setListeners($("#album-grid"));
      }

function setListeners(grid) {
    let div;

    grid.children().click(function(event) {
        div = $('#bigImage');
        let image = $(event.target).clone().css('z-index', '2999').hide();
        if (!div.length) {
            div = $('<div id="bigImage" class="biggerImage" style="display:flex; flex-direction:column;"></div>');
            div .append(image)
                .append(`<div class="imageDescription"><span class="imageText">${$(this).attr("title")} (фото ${$(this).attr("alt")} из ${filenames.length})</span></div>`)
                .on("click", function(e) {
                    div.remove();
                });
                image.show("fast");
                div.children(".imageDescription")
                    .prepend(`<img alt="prev" class="arrow" style="transform:rotate(180deg);" src="img/arrow-next-icon.svg">`)
                    .append (`<img alt="next" class="arrow" src="img/arrow-next-icon.svg">`);
                    
                    grid.append(div);
                    div.children(".imageDescription").children("[alt='prev']").click(e => clickPrev(e));
                    div.children(".imageDescription").children("[alt='next']").click(e => clickNext(e));
            
            function clickPrev(e) {
                e.stopImmediatePropagation();
                let index = (div.children("img").attr('alt') - 1 + filenames.length - 1) % filenames.length; //.match(/\d+/)
                let newImage = $(`<img src=${directory + filenames[index]} alt=${index+1} title=${captions[index]} style="z-index:5000;">`).hide();                div.children('img').fadeOut('slow', function () {
                    div.children('img').replaceWith(newImage);
                    div.children('img').fadeIn('fast');
                });
                div.children('.imageDescription').children('.imageText').text(`${captions[index]} (фото ${(index+1)} из ${filenames.length})`);
                
            }
            
            function clickNext(e) {
                e.stopImmediatePropagation();
                let index = (div.children("img").attr('alt') - 1 + filenames.length + 1) % filenames.length; //.match(/\d+/)
                
                let newImage = $(`<img src=${directory + filenames[index]} alt=${index+1} title=${captions[index]} style="z-index:5000;">`).hide();
    
                div.children('img').fadeOut('slow', function () {
                    div.children('img').replaceWith(newImage);
                    div.children('img').fadeIn('fast');
                });
                div.children('.imageDescription').children('.imageText').text(`${captions[index]} (фото ${(index+1)} из ${filenames.length})`);
            }
        }
    });
}

    </script>
  </section>
@endsection