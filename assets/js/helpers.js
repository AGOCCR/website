const addTransitionBackground = (() => {
  const $style = document.createElement("style");
  const uuid = crypto.randomUUID();
  const animationName = `move-image-${uuid}`;
  const className = `bg-${uuid}`;
  const animation = `${animationName} 23s linear`;

  $style.innerHTML = `
  .${className} {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    object-fit: cover;
    opacity: 0;
    visibility: hidden;
    z-index: -99;
  }

  @keyframes ${animationName} {
    from { transform: translate(0, 0) scale(1.1); }
    to { transform: translate(-50px, -50px) scale(1.4); }
  }
  `;

  document.head.appendChild($style);

  return (
    $element,
    imagesURL,
    { opacity = 1, transitionTimeout = 300, intervalTimeout = 7000 }
  ) => {
    if (imagesURL.length < 2)
      throw new Error("ImagesURL must have at least 2 images");

    $element.style.position = "relative";

    const $images = imagesURL.map((imgURL) => {
      const image = new Image();

      image.className = className;

      image.style.transition = `opacity ${transitionTimeout}ms ease`;

      image.src = imgURL;
      return image;
    });
    const $fragment = document.createDocumentFragment();

    $images.forEach(($image) => $fragment.appendChild($image));

    $element.appendChild($fragment);

    $images[0].style.opacity = opacity;
    $images[0].style.visibility = "visible";
    $images[0].style.animation = animation;

    let turn = 1;
    setInterval(() => {
      let prevTurn = (turn - 1) % $images.length;

      $images[prevTurn].style.opacity = 0;

      setTimeout(() => {
        $images[prevTurn].style.visibility = "hidden";
        $images[prevTurn].style.animation = null;
      }, transitionTimeout);

      const nextTurn = turn % $images.length;

      $images[nextTurn].style.opacity = opacity;
      $images[nextTurn].style.visibility = "visible";
      $images[nextTurn].style.animation = animation;

      turn++;
    }, intervalTimeout);
  };
})();
