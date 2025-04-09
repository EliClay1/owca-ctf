// Select all triangles
const triangles = document.querySelectorAll('.triangle');

triangles.forEach(triangle => {
  // Randomize size, rotation, animation duration, and delay
  const randomScale = 1;
  const randomRotation = Math.random() * 360; // Rotation between 0 and 360 degrees
  const randomDirection = Math.random() < 0.5 ? -1 : 1; // Randomly choose -1 or 1 for direction
  const finalRotation = randomRotation * randomDirection; // Apply direction to rotation
  
  const randomDuration = Math.random() * (20 - 15) + 15; // Duration between 15s and 20s
  const randomDelay = Math.random() * -10 + 's'; // Delay between -10s and 0s

  // Apply styles dynamically
  triangle.style.width = `${Math.random() * (12 - 6) + 6}%`; // Width between 6% and 12%
  triangle.style.height = `${Math.random() * (24 - 12) + 12}%`; // Height between 12% and 24%
  
  triangle.style.transform = `scale(${randomScale}) rotate(${finalRotation}deg)`;
  
  triangle.style.animationDuration = `${randomDuration}s`;
  
  triangle.style.animationDelay = randomDelay;
});
