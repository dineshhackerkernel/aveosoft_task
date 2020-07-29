<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Simple but elegant design elements are the future of web design. This applies to sliders and galleries, too. This simple Image Slider is a great way to display an image slider on any website. It’s a boxed slider, which makes it perfect to publish inside posts or any non-full width sections. The slider’s structure is quite simple, as it has three slides only. The visitor can go through every slide using the arrows, bullets, swiping or dragging.

Each slide has a short caption that describes the image of the slide. The font color of the caption is white, and there’s an opaque dark background behind it. This ensures that the text remains legible regardless of the image behind it. The font family is Raleway, which is easy to read, especially in such a big size. Thanks to Content mode, which is one of Smart Slider 3’s two editing modes, the caption remains legible on mobile. The caption is positioned to the the bottom-left corner of the slide on big screens. But on small mobile screens, the caption is moved to the center of the slide. This small change improves the look of the slider on small screens.

At the bottom of the slider there’s a dark shadow. It’s created by the Shadow control feature. There are seven predefined shadows, and in the Pro version it’s possible to upload a custom image. (Don’t forget to switch to Expert mode first.) Just like every control, shadows can be hidden on desktop, tablet or mobile devices. You can even hide them on certain slides. Shadows are great to make the slider pop off the page giving the impression that visitors can physically interact with the slider. Shadows also help to state hierarchy between the slider and the rest of the page. They make the slider appear above the rest of the page content.</p>
</div>

</body>
</html>
