import * as THREE from "three";

var scene = new THREE.Scene();
var camera = new THREE.PerspectiveCamera( 75, window.innerWidth/window.innerHeight, 0.1, 1000 );

var renderer = new THREE.WebGLRenderer();
renderer.setSize( window.innerWidth, window.innerHeight );
document.body.appendChild( renderer.domElement );


camera.position.z = 5;

var animate = function () {
	requestAnimationFrame( animate );

	cube.rotation.x += 0.01;
	cube.rotation.y += 0.01;

	renderer.render( scene, camera );
};

let TEXTURE = new TextureLoader().load('supaAmazingImage.jpg'); 
let mesh = new Mesh(
	new PlaneBufferGeometry(), 
	new MeshBasicMaterial({map: TEXTURE})
)

animate();

// set up post processing
let composer = new EffectComposer(renderer);
let renderPass = new RenderPass(scene, camera);
// rendering our scene with an image
composer.addPass(renderPass);

// our custom shader pass for the whole screen, to displace previous render
let customPass = new ShaderPass({vertexShader,fragmentShader});
// making sure we are rendering it.
customPass.renderToScreen = true;
composer.addPass(customPass);

// actually render scene with our shader pass
composer.render()
// instead of previous
// renderer.render(scene, camera);



// get small circle around mouse, with distances to it
float c = circle(uv, mouse, 0.0, 0.2);
// get texture 3 times, each time with a different offset, depending on mouse speed:
float r = texture2D(tDiffuse, uv.xy += (mouseVelocity * .5)).x;
float g = texture2D(tDiffuse, uv.xy += (mouseVelocity * .525)).y;
float b = texture2D(tDiffuse, uv.xy += (mouseVelocity * .55)).z;
// combine it all to final output
color = vec4(r, g, b, 1.);


let images = [...document.querySelectorAll('.__h-gallery__images__list__item__figure__image')];
images.forEach(image=>{
	// and we have the width, height and left, top position of the image now!
	let dimensions = image.getBoundingClientRect();
	// hide original image
	image.style.visibility = hidden;
	// add 3D object to your scene, according to its HTML brother dimensions
	createMesh(dimensions);
})

vec2 newUV = mix(uv, mouse, circle); 
color = texture2D(tDiffuse,newUV);