<!-- resources/views/slider.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .slider {
            overflow: hidden;
            width: 100%;
            position: relative;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 100%;
        }

        .slide {
            width: 100%;
            flex-shrink: 0;
        }
    </style>
</head>
<body>
    <section class="w-full flex justify-center my-20">
        <div class="slider" id="slider">
            <div class="slides">
                <div class="slide">
                    <img src="{{ asset('iklan/iklan1.png') }}" alt="Iklan 1" class="w-full object-cover">
                </div>
                <div class="slide">
                    <img src="{{ asset('iklan/iklan2.png') }}" alt="Iklan 2" class="w-full object-cover">
                </div>
                <div class="slide">
                    <img src="{{ asset('iklan/iklan3.png') }}" alt="Iklan 3" class="w-full object-cover">
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelector('.slides');
            const slide = document.querySelectorAll('.slide');
            let index = 0;

            function nextSlide() {
                index++;
                if (index === slide.length) {
                    index = 0;
                }
                slides.style.transform = 'translateX(' + (-index * 100) + '%)';
            }

            setInterval(nextSlide, 3000); // Change slide every 3 seconds
        });
    </script>
</body>
</html>
