<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Not logged in, redirect to login page
    header("Location: /ctf-website/index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>O.W.C.A File Navigator™</title>
  <link rel="stylesheet" href="../styles/styles.css">
  <link rel="stylesheet" href="https://use.typekit.net/ezb4wpg.css">
</head>

<body class="agent">
  <div class="header">
    <h1>O.W.C.A File Navigator™</h1>
    <div class="search-bar">
      <input type="text" placeholder="Search">
    </div>
  </div>
  
  <div class="back-button" onclick="history.back()">
    &#8592; Back
  </div>

  <div class="agent-container"> 
    <div class="agent-file" onclick="openModal(agentPText)">
        <img src="../styles/images/text_icon.png" alt="Text File Icon">
        <span class="file-label">agent_p.txt</span>
    </div>
    <div class="agent-file" onclick="openModal(agentBText)">
        <img src="../styles/images/text_icon.png" alt="Text File Icon">
        <span class="file-label">agent_b.txt</span>
    </div>
    <div class="agent-file" onclick="openModal(agentLText)">
        <img src="../styles/images/text_icon.png" alt="Text File Icon">
        <span class="file-label">agent_l.txt</span>
    </div>
    <div class="agent-file" onclick="openModal(agentCText)">
        <img src="../styles/images/text_icon.png" alt="Text File Icon">
        <span class="file-label">agent_c.txt</span>
    </div>
    <div class="agent-file" onclick="openModal(agentDText)">
        <img src="../styles/images/text_icon.png" alt="Text File Icon">
        <span class="file-label">agent_d.txt</span>
    </div>
    <div class="agent-file" onclick="openModal(agentFText)">
        <img src="../styles/images/text_icon.png" alt="Text File Icon">
        <span class="file-label">agent_f.txt</span>
    </div>
    <div class="agent-file" onclick="openModal(agentHText)">
        <img src="../styles/images/text_icon.png" alt="Text File Icon">
        <span class="file-label">agent_h.txt</span>
    </div>
    <div class="agent-file" onclick="openModal(agentTText)">
        <img src="../styles/images/text_icon.png" alt="Text File Icon">
        <span class="file-label">agent_t.txt</span>
    </div>
    <div class="agent-file" onclick="openModal(agentSText)">
        <img src="../styles/images/text_icon.png" alt="Text File Icon">
        <span class="file-label">agent_s.txt</span>
    </div>
    <div class="agent-file" onclick="openModal(agentRText)">
        <img src="../styles/images/text_icon.png" alt="Text File Icon">
        <span class="file-label">agent_r.txt</span>
    </div>
    <!-- <div class="agent-file" onclick="openModal(agentMText)">
        <img src="../styles/images/text_icon.png" alt="Text File Icon">
        <span class="file-label">agent_m.txt</span>
    </div> -->
  </div>
  <div id="textModal" class="agent-modal">
    <div class="agent-modal-content">
      <span class="modal-close-btn" onclick="closeModal()">&times;</span>
      <pre id="modalText">
        <span id="agentFileText"></span><span class="blinking-cursor">█</span>
      </pre>      
    </div>
  </div>
  
</body>

<script>
  const agentPText = `
==============================
  O.W.C.A AGENT DOSSIER
==============================

Agent Name: Agent P
Species: Platypus
Assigned Region: Tri-State Area
Handler: Major Monogram
Known Alias: Perry
Skills: Stealth, Martial Arts, Fedora Retrieval, Wall-Jumping
Status: ACTIVE

Mission Highlights:
- Neutralized Doofenshmirtz's Time Travel-Inator
- Recovered stolen blueprints from the Mecha-Ferret
- Saved Carl from the Shrink-Inator (again)

Notes:
Agent shows excellent adaptability and nonverbal communication.
Remains undetected by primary targets.

CLASSIFICATION: TOP SECRET
`;

const agentBText = `
==============================
  O.W.C.A AGENT DOSSIER
==============================

Agent Name: Agent B
Species: Bumblebee
Assigned Region: Floridian Swamplands
Handler: Carl the Intern (Under Protest)
Known Alias: "Buzzkill"
Skills: Aerodynamic Agility, Mild Annoyance, Rapid Wing Vibration
Status: INACTIVE (stung Major Monogram)

Mission Highlights:
- Mistakenly infiltrated a picnic.
- Tried to sting a Roomba (unsuccessful).
- Disoriented by own reflection in a spoon.
- Discovered a key phrase 'PERRY' from Evil Incorporated minion Vignes Cipher

Notes:
Buzzes too loud for stealth missions. Under review for possible reassignment to "Pollination Ops."

CLASSIFICATION: MEH
`;

const agentTText = `
==============================
  O.W.C.A AGENT DOSSIER
==============================

Agent Name: Agent T
Species: Golden Lion Tamarin
Assigned Region: Classified
Handler: UNKNOWN
Known Alias: The Banana Phantom
Skills: Tree-hopping, Lockpicking, Typing 200 WPM
Status: ACTIVE

Mission Highlights:
- Infiltrated the Banana Republic.
- Cracked the "Fruit Basket Protocol".
- Found hidden file: flag{this_isnt_the_real_one_but_its_a_good_sign}

Notes:
Agent often leaves behind coded messages in banana peels.
Check file: /missions/scrambled_logs/bannana_split.php for more.

CLASSIFICATION: HIGH CLEARANCE ONLY
`;

const agentDText = `
==============================
  O.W.C.A AGENT DOSSIER
==============================

Agent Name: Agent D
Species: Dragonfly
Assigned Region: Amazon Rainforest
Handler: Major Monogram
Known Alias: "Flitter"
Skills: Aerial Recon, Quick Maneuvering, High-Speed Pursuit
Status: ACTIVE

Mission Highlights:
- Tracked a rogue Doofenshmirtz invention to the heart of the jungle.
- Stopped a fruit-stealing syndicate led by a genetically-modified raccoon.
- Delivered critical intelligence to HQ while evading capture.

Notes:
Agent D has a remarkable ability to blend into dense foliage.
Specializes in high-speed recon operations.

CLASSIFICATION: TOP SECRET
`;

const agentFText = `
==============================
  O.W.C.A AGENT DOSSIER
==============================

Agent Name: Agent F
Species: Falcon
Assigned Region: Rocky Mountain Range
Handler: Major Monogram
Known Alias: "Sky Swooper"
Skills: Aerial Combat, Thermal Imaging, Tactical Planning
Status: ACTIVE

Mission Highlights:
- Took down a group of Doofenshmirtz's flying robotic hawks.
- Saved a high-profile diplomat during a skydiving accident.
- Disabled a drone surveillance network in under 10 minutes.

Notes:
Agent F has unmatched precision when it comes to aerial combat and reconnaissance.

CLASSIFICATION: HIGHLY SECURE
`;

const agentHText = `
==============================
  O.W.C.A AGENT DOSSIER
==============================

Agent Name: Agent H
Species: Hedgehog
Assigned Region: European Forests
Handler: Major Monogram
Known Alias: "Spikes"
Skills: High-Speed Movement, Roll Attack, Spiny Defense
Status: ACTIVE

Mission Highlights:
- Disrupted a Doofenshmirtz plot to steal an ancient artifact.
- Assisted in infiltrating a high-security research lab by digging under the fence.
- Foiled an attempt to steal classified documents from O.W.C.A HQ.

Notes:
Agent H's speed and defense capabilities make them a force to be reckoned with.

CLASSIFICATION: TOP SECRET
`;

const agentLText = `
==============================
  O.W.C.A AGENT DOSSIER
==============================

Agent Name: Agent L
Species: Lemur
Assigned Region: Madagascar
Handler: Major Monogram
Known Alias: "Monkey Business"
Skills: Stealth, Acrobatics, Deception
Status: ACTIVE

Mission Highlights:
- Retrieved stolen technology from a criminal underworld leader.
- Tricked an enemy agent into giving up classified intel.
- Performed a covert extraction during a Doofenshmirtz sting operation.

Notes:
Agent L excels at deception and gathering intel under the radar.

CLASSIFICATION: HIGH CLEARANCE ONLY
`;

const agentSText = `
==============================
  O.W.C.A AGENT DOSSIER
==============================

Agent Name: Agent S
Species: Sloth
Assigned Region: Central America
Handler: Major Monogram
Known Alias: "Slowpoke"
Skills: Stealth, Untraceable Movement, Patience
Status: ACTIVE

Mission Highlights:
- Successfully infiltrated a Doofenshmirtz lair while maintaining perfect stillness.
- Disarmed a highly sensitive bomb without triggering the alarm.
- Tracked a suspect for days without being detected.

Notes:
Agent S is a master of slow, deliberate action. Their patience is unparalleled.

CLASSIFICATION: TOP SECRET
`;

const agentRText = `
==============================
  O.W.C.A AGENT DOSSIER
==============================

Agent Name: Agent R
Species: Rhinoceros
Assigned Region: African Savannah
Handler: Major Monogram
Known Alias: "Tank"
Skills: Super Strength, Tactical Domination, High Durability
Status: ACTIVE

Mission Highlights:
- Broke through a fortified wall during a mission to retrieve stolen data.
- Neutralized Doofenshmirtz's Giant Robot Dinosaur.
- Stopped an arms trade in the Sahara Desert by using sheer force.

Notes:
Agent R's strength and resistance to physical damage are unmatched.

CLASSIFICATION: HIGHLY SECURE
`;

const agentMText = `
==============================
  O.W.C.A AGENT DOSSIER
==============================

Agent Name: Agent M
Species: Praying Mantis
Assigned Region: Southeast Asia
Handler: Major Monogram
Known Alias: "Silent Strike"
Skills: Stealth, Precision Strike, Camouflage
Status: ACTIVE

Mission Highlights:
- Eliminated a threat by taking out Doofenshmirtz's disguised infiltrator.
- Deactivated an enemy's security system without leaving a trace.
- Collected critical intel from a heavily guarded warehouse.

Notes:
Agent M is extremely skilled in remaining unseen and eliminating threats quietly.

CLASSIFICATION: TOP SECRET
`;

const agentCText = `
==============================
  O.W.C.A AGENT DOSSIER
==============================

Agent Name: Agent C
Species: Cheetah
Assigned Region: African Savannah
Handler: Major Monogram
Known Alias: "Speedster"
Skills: Lightning Fast Sprinting, Pursuit, Evasion
Status: ACTIVE

Mission Highlights:
- Outran Doofenshmirtz's pursuit drones and escaped undetected.
- Completed an extreme high-speed chase to apprehend a fugitive.
- Saved an O.W.C.A asset from a high-speed vehicle chase.

Notes:
Agent C's incredible speed allows for rapid pursuit and high-speed escapes.

CLASSIFICATION: HIGHLY SECURE
`;




function openModal(text) {
  const modal = document.getElementById('textModal');
  const agentText = document.getElementById('agentFileText');
  
  agentText.textContent = ''; // Clear previous content
  modal.style.display = 'block';

  let index = 0;

  function typeLetter() {
    if (index < text.length) {
      agentText.textContent += text.charAt(index);
      index++;
      setTimeout(typeLetter, 10); // Adjust speed here (lower = faster)
    }
  }
  typeLetter();
}



  // Function to close the modal
  function closeModal() {
    const modal = document.getElementById('textModal');
    
    modal.style.display = 'none'; // Hide the modal
  }

  // Close modal when clicking outside of it
  window.onclick = function(event) {
    const modal = document.getElementById('textModal');
    
    if (event.target === modal) {
        modal.style.display = 'none';
    }
  };
</script>

</body>
</html>
