//scale
var bounce1 = new Bounce();
bounce1.scale({
    from: { x: 0.5, y: 0.5 },
    to: { x: 1, y: 1 }
});bounce1.define('scale-animagtion');

//rotate
var bounce2 = new Bounce();
bounce2.rotate({
    from: 0,
    to: 90
});bounce2.define('rotate-animation');
//translate
bounce3 = new Bounce();
bounce3.translate({
    from: { x: 0, y: 0 },
    to: { x: 100, y: 0 }
});bounce3.define('translate-animation');
//skew
var bounce4 = new Bounce();
bounce4.skew({
    from: { x: 0, y: 0 },
    to: { x: 20, y: 0 }
});bounce4.define('skew-animation')


//another way to use
//bounce.applyTo(document.querySelectorAll(".animation-target"));
// // or with jQuery: bounce.applyTo($(".animation-target"));
/*The functions to control animation:
loop: Loops the animation infinitely if set to true. Defaults to false.
remove: Removes the animation once it is complete. If your animation ends in a state different from what the element had before, the element will return to its original state in some browsers. Defaults to false
onComplete: A callback function to be run after the animation is complete.*/
//bounce.applyTo($(".animation-target")).then(function() {
//   console.log("Animation Complete");
// }); //where function is loop, remove or on complete
/*
These functions accept these parameters as well.
duration: The duration of the animation in ms. Defaults to 1000.
delay: The delay of the animation in ms. Defaults to 0.
easing: One of "bounce", "sway", "hardbounce", "hardsway". These are the same as in the "Easing" menu in the tool. Defaults to "bounce".
bounces: The number of bounces in the animation. Defaults to 4.
stiffness: The stiffness of the bounces in the animation, should be a value between 1 and 5. Defaults to 3.*/