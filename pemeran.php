<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemeran</title>

    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-heighht: 100vh;
    background: #000;
}

.container {
    max.width: 1200px;
    width: 95%;
}

.slide-wrapper {
    position:relative;
}

.slide-wrapper .slide-button {
    position: absolute;
    top: 50%;
    height: 50px;
    width: 50px;
    color: #fff;
    border: none;
    outline: none;
    background: #000;
    cursor: pointer;
    border-radius: 50%;
    transform: translateY(-50%);
}

.slide-wrapper .slide-button:hover {
    background: #444;
}

.slide-wrapper .slide-button#prev-slide {
    left: -20px;
    display: none;
}

.slide-wrapper .slide-button#next-slide {
    right: -20px;
}

.slider-wrapper .image-list {
    display: grid;
    gap: 18px;
    font-size: 0;
    margin-bottom: 30px;
    overflow-x: auto;
    scrollbar-width: none;
    grid-template-columns: repeat(10, 1fr);
}

.slider-wrapper .image-list::-webkit-scrollbar {
    display:none;
}

.slider-wrapper .image-list .image-item{
    width: 325px;
    height: 400px;
    object-fit: cover;
}

.container .slider-scrollbar {
    height: 24px;
    width: 100%;
    display: flex;
    align-items: center;
}

.slider-scrollbar .scrollbar-track {
    height: 2px;
    width: 100%$;
    background: #ccc;
    position: relative;
    border-radius: 4px;
}

.slider-scrollbar:hover .scrollbar-track {
    height: 4px;
}

.slider-scrollbar .scrollbar-thumb {
    position: absolute;
    height: 100%;
    width: 50%$;
    background: #000;
    border-radius: inherit;
    cursor: grab;
}

.slider-scrollbar .scrollbar-thumb:active {
    cursor: grabbing;
    height: 8px;
    top: -2px;

}

.slider-scrollbar .scrollbar-thumb::after{
    content:"";
    position: absolute;
    left: 0;
    right: 0;
    top= -10px;
    bottom: -10px;

}

@media (max-width: 1023px) {
    .slider-wrapper .slide-button {
        display: none!important;
    }

    .slider-wrapper .image-list {
        gap: 10px;
        margin-bottom: 15px;
    }

    .slider-wrapper .image-list .image-item {
        width: 280px;
        height: 380px;
    }

    .slider-scrollbar .scrollbar-thumb {
        width: 20%;
    }
}


    </style>

</head>
<body>
    <div class="container">
        <div class="slider-wrapper">
            <button  id="prev-slide" class="slide-button material-symbols-rounded">chevron_left</button>
            <div class="image-list">
                <img src="assets/images/pemeran1.png" alt="" class="image-item">
                <img src="assets/images/pemeran2.png" alt="" class="image-item">
                <img src="assets/images/pemeran3.png" alt="" class="image-item">
                <img src="assets/images/pemeran4.png" alt="" class="image-item">
                <img src="assets/images/pemeran5.png" alt="" class="image-item">
                <img src="assets/images/pemeran6.png" alt="" class="image-item">
            </div>
            <button  id="next-slide" class="slide-button material-symbols-rounded">chevron_right</button>
        </div>
        <div class="slider-scrollbar">
            <div class="scrollbar-track">
                <div class="scrollbar-thumb">

                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
const initSlider = () => {
    const imageList = document.querySelector(".slider-wrapper .image-list");
    const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
    const sliderScrollbar = document.querySelector(".container .slider-scrollbar");
    const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
    const maxScrollLeft = imageList.scrollWidth - imageList.clienWidth;

    scrollbarThumb.addEventListener("mousedown", (e) => {
        const startX = e.clientX;
        const thumbPosition = scrollbarThumb.offsetLeft;

        const handleMouseMove = (e) => {
            const deltaX = e.clientX - startX;
            const newThumbPosition = thumbPosition + deltaX;
            const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;

            const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
            const scrollPosition = (boundedPosition / maxThumbPOsition) * maxScrollLeft;

            scrollbarThumb.style.left = `${newThumbPosition}px` ;
            imageList.scrollLeft = scrollPosition;
        }

        const handleMouseUp = () => {
            document.removeEventListener("mousemove", handleMouseMove);
            document.removeEventListener("mouseup", handleMouseUp);
        }

        document.addEventListener("mousemove", handleMouseMove);
        document.addEventListener("mouseup", handleMouseUp);
    });

    slideButtons.forEach(button => {
        button.addEventListener("click", () => {
            const direction = button.id === "prev-slide" ? -1 : 1;
            const scrollAmount = imageList.clientWidth * direction;
            imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });
    });

    const handleSlideButtons = () => {
        slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "block";
        slideButtons[1].style.display = imageList.scrollLeft >= maxScrollleft ? "none" : "block";
    }

    const updateScrollThumbPosition = () => {
        const scrollPosition = imageList.scrollleft;
        const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clienWidth - scrollbarThumb.offsetWidth);
        scrollbarThumb.style.left = `${thumbPosition}px`;
    }

    imageList.addEventListener("scroll", () => {
        handleSlideButtons();
    });
}

window.addEventListener("load", initSlider);
</script>