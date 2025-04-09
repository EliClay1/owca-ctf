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
<body class="navigator">
  <div class="header">
    <h1>O.W.C.A File Navigator™</h1>
    <div class="search-bar">
      <input type="text" placeholder="Search">
    </div>
  </div>
  <!-- HINT: SEARCH FOR AGENT -->
  <div class="back-button" onclick="history.back()">
    &#8592; Back
  </div>
  
  <div class="data-corrupted">
    DATA CORRUPTED
  </div>
  <h3>
    Testing
    %%$#@ INITIATING_>_CORRUPT.BLOCK_SEQUENCE || ERROR:MEMORY:SPILL#13 /// O.W.C.A::core//agent-LOC tracking==DOWN. re-link attempt: FAIL... fail... fa1L... SYSTEM BREACH BY ENTITY::D_D00F && scrambled sectors in: /logs/redacted/_DO_NOT_OPEN && temp//vault7$glitchparser_v3.... [access_code==“????”]—REMNANT PROTOCOL_ACTIVE restore://handlers→perry, ferret, tuna, AGENT_T (file is untouched?? CHECK agent_t??)....  reboot.token_114:denied || folder AG3NTS scrambled (except one?) || EXECUTE: TRACE, FOLLOW, UNPACK, ESCAPE. QUERY: ./../secrets/sql_dump.bak attempt 01: injection flag not found—KEYWORD: “bananafish” rejected. EmbeddedData/invisible_channel.png flagged → suspicious: decode with steg? >>>> end_trans.mission//CLASSIFIED$@#$
    Testing
    %%$#@ INITIATING_>_CORRUPT.BLOCK_SEQUENCE || ERROR:MEMORY:SPILL#13 /// O.W.C.A::core//agent-LOC tracking==DOWN. re-link attempt: FAIL... fail... fa1L... SYSTEM BREACH BY ENTITY::D_D00F && scrambled sectors in: /logs/redacted/_DO_NOT_OPEN && temp//vault7$glitchparser_v3.... [access_code==“????”]—REMNANT PROTOCOL_ACTIVE restore://handlers→perry, ferret, tuna, AGENT_T (file is untouched?? CHECK agent_t??)....  reboot.token_114:denied || folder AG3NTS scrambled (except one?) || EXECUTE: TRACE, FOLLOW, UNPACK, ESCAPE. QUERY: ./../secrets/sql_dump.bak attempt 01: injection flag not found—KEYWORD: “bananafish” rejected. EmbeddedData/invisible_channel.png flagged → suspicious: decode with steg? >>>> end_trans.mission//CLASSIFIED$@#$
    Testing
    %%$#@ INITIATING_>_CORRUPT.BLOCK_SEQUENCE || ERROR:MEMORY:SPILL#13 /// O.W.C.A::core//agent-LOC tracking==DOWN. re-link attempt: FAIL... fail... fa1L... SYSTEM BREACH BY ENTITY::D_D00F && scrambled sectors in: /logs/redacted/_DO_NOT_OPEN && temp//vault7$glitchparser_v3.... [access_code==“????”]—REMNANT PROTOCOL_ACTIVE restore://handlers→perry, ferret, tuna, AGENT_T (file is untouched?? CHECK agent_t??)....  reboot.token_114:denied || folder AG3NTS scrambled (except one?) || EXECUTE: TRACE, FOLLOW, UNPACK, ESCAPE. QUERY: ./../secrets/sql_dump.bak attempt 01: injection flag not found—KEYWORD: “bananafish” rejected. EmbeddedData/invisible_channel.png flagged → suspicious: decode with steg? >>>> end_trans.mission//CLASSIFIED$@#$
    Testing
    %%$#@ INITIATING_>_CORRUPT.BLOCK_SEQUENCE || ERROR:MEMORY:SPILL#13 /// O.W.C.A::core//agent-LOC tracking==DOWN. re-link attempt: FAIL... fail... fa1L... SYSTEM BREACH BY ENTITY::D_D00F && scrambled sectors in: /logs/redacted/_DO_NOT_OPEN && temp//vault7$glitchparser_v3.... [access_code==“????”]—REMNANT PROTOCOL_ACTIVE restore://handlers→perry, ferret, tuna, AGENT_T (file is untouched?? CHECK agent_t??)....  reboot.token_114:denied || folder AG3NTS scrambled (except one?) || EXECUTE: TRACE, FOLLOW, UNPACK, ESCAPE. QUERY: ./../secrets/sql_dump.bak attempt 01: injection flag not found—KEYWORD: “bananafish” rejected. EmbeddedData/invisible_channel.png flagged → suspicious: decode with steg? >>>> end_trans.mission//CLASSIFIED$@#$
    Testing
    %%$#@ INITIATING_>_CORRUPT.BLOCK_SEQUENCE || ERROR:MEMORY:SPILL#13 /// O.W.C.A::core//agent-LOC tracking==DOWN. re-link attempt: FAIL... fail... fa1L... SYSTEM BREACH BY ENTITY::D_D00F && scrambled sectors in: /logs/redacted/_DO_NOT_OPEN && temp//vault7$glitchparser_v3.... [access_code==“????”]—REMNANT PROTOCOL_ACTIVE restore://handlers→perry, ferret, tuna, AGENT_T (file is untouched?? CHECK agent_t??)....  reboot.token_114:denied || folder AG3NTS scrambled (except one?) || EXECUTE: TRACE, FOLLOW, UNPACK, ESCAPE. QUERY: ./../secrets/sql_dump.bak attempt 01: injection flag not found—KEYWORD: “bananafish” rejected. EmbeddedData/invisible_channel.png flagged → suspicious: decode with steg? >>>> end_trans.mission//CLASSIFIED$@#$
    Testing
    %%$#@ INITIATING_>_CORRUPT.BLOCK_SEQUENCE || ERROR:MEMORY:SPILL#13 /// O.W.C.A::core//agent-LOC tracking==DOWN. re-link attempt: FAIL... fail... fa1L... SYSTEM BREACH BY ENTITY::D_D00F && scrambled sectors in: /logs/redacted/_DO_NOT_OPEN && temp//vault7$glitchparser_v3.... [access_code==“????”]—REMNANT PROTOCOL_ACTIVE restore://handlers→perry, ferret, tuna, AGENT_T (file is untouched?? CHECK agent_t??)....  reboot.token_114:denied || folder AG3NTS scrambled (except one?) || EXECUTE: TRACE, FOLLOW, UNPACK, ESCAPE. QUERY: ./../secrets/sql_dump.bak attempt 01: injection flag not found—KEYWORD: “bananafish” rejected. EmbeddedData/invisible_channel.png flagged → suspicious: decode with steg? >>>> end_trans.mission//CLASSIFIED$@#$
    Testing
    %%$#@ INITIATING_>_CORRUPT.BLOCK_SEQUENCE || ERROR:MEMORY:SPILL#13 /// O.W.C.A::core//agent-LOC tracking==DOWN. re-link attempt: FAIL... fail... fa1L... SYSTEM BREACH BY ENTITY::D_D00F && scrambled sectors in: /logs/redacted/_DO_NOT_OPEN && temp//vault7$glitchparser_v3.... [access_code==“????”]—REMNANT PROTOCOL_ACTIVE restore://handlers→perry, ferret, tuna, AGENT_T (file is untouched?? CHECK agent_t??)....  reboot.token_114:denied || folder AG3NTS scrambled (except one?) || EXECUTE: TRACE, FOLLOW, UNPACK, ESCAPE. QUERY: ./../secrets/sql_dump.bak attempt 01: injection flag not found—KEYWORD: “bananafish” rejected. EmbeddedData/invisible_channel.png flagged → suspicious: decode with steg? >>>> end_trans.mission//CLASSIFIED$@#$
    Testing
    %%$#@ INITIATING_>_CORRUPT.BLOCK_SEQUENCE || ERROR:MEMORY:SPILL#13 /// O.W.C.A::core//agent-LOC tracking==DOWN. re-link attempt: FAIL... fail... fa1L... SYSTEM BREACH BY ENTITY::D_D00F && scrambled sectors in: /logs/redacted/_DO_NOT_OPEN && temp//vault7$glitchparser_v3.... [access_code==“????”]—REMNANT PROTOCOL_ACTIVE restore://handlers→perry, ferret, tuna, AGENT_T (file is untouched?? CHECK agent_t??)....  reboot.token_114:denied || folder AG3NTS scrambled (except one?) || EXECUTE: TRACE, FOLLOW, UNPACK, ESCAPE. QUERY: ./../secrets/sql_dump.bak attempt 01: injection flag not found—KEYWORD: “bananafish” rejected. EmbeddedData/invisible_channel.png flagged → suspicious: decode with steg? >>>> end_trans.mission//CLASSIFIED$@#$
    Testing
    %%$#@ INITIATING_>_CORRUPT.BLOCK_SEQUENCE || ERROR:MEMORY:SPILL#13 /// O.W.C.A::core//agent-LOC tracking==DOWN. re-link attempt: FAIL... fail... fa1L... SYSTEM BREACH BY ENTITY::D_D00F && scrambled sectors in: /logs/redacted/_DO_NOT_OPEN && temp//vault7$glitchparser_v3.... [access_code==“????”]—REMNANT PROTOCOL_ACTIVE restore://handlers→perry, ferret, tuna, AGENT_T (file is untouched?? CHECK agent_t??)....  reboot.token_114:denied || folder AG3NTS scrambled (except one?) || EXECUTE: TRACE, FOLLOW, UNPACK, ESCAPE. QUERY: ./../secrets/sql_dump.bak attempt 01: injection flag not found—KEYWORD: “bananafish” rejected. EmbeddedData/invisible_channel.png flagged → suspicious: decode with steg? >>>> end_trans.mission//CLASSIFIED$@#$
    Testing
    %%$#@ INITIATING_>_CORRUPT.BLOCK_SEQUENCE || ERROR:MEMORY:SPILL#13 /// O.W.C.A::core//agent-LOC tracking==DOWN. re-link attempt: FAIL... fail... fa1L... SYSTEM BREACH BY ENTITY::D_D00F && scrambled sectors in: /logs/redacted/_DO_NOT_OPEN && temp//vault7$glitchparser_v3.... [access_code==“????”]—REMNANT PROTOCOL_ACTIVE restore://handlers→perry, ferret, tuna, AGENT_T (file is untouched?? CHECK agent_t??)....  reboot.token_114:denied || folder AG3NTS scrambled (except one?) || EXECUTE: TRACE, FOLLOW, UNPACK, ESCAPE. QUERY: ./../secrets/sql_dump.bak attempt 01: injection flag not found—KEYWORD: “bananafish” rejected. EmbeddedData/invisible_channel.png flagged → suspicious: decode with steg? >>>> end_trans.mission//CLASSIFIED$@#$
    Testing
    %%$#@ INITIATING_>_CORRUPT.BLOCK_SEQUENCE || ERROR:MEMORY:SPILL#13 /// O.W.C.A::core//agent-LOC tracking==DOWN. re-link attempt: FAIL... fail... fa1L... SYSTEM BREACH BY ENTITY::D_D00F && scrambled sectors in: /logs/redacted/_DO_NOT_OPEN && temp//vault7$glitchparser_v3.... [access_code==“????”]—REMNANT PROTOCOL_ACTIVE restore://handlers→perry, ferret, tuna, AGENT_T (file is untouched?? CHECK agent_t??)....  reboot.token_114:denied || folder AG3NTS scrambled (except one?) || EXECUTE: TRACE, FOLLOW, UNPACK, ESCAPE. QUERY: ./../secrets/sql_dump.bak attempt 01: injection flag not found—KEYWORD: “bananafish” rejected. EmbeddedData/invisible_channel.png flagged → suspicious: decode with steg? >>>> end_trans.mission//CLASSIFIED$@#$

  </h3>
</body>
</html>
