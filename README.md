# YouTube2IPFS
Backup Youtube videos to IPFS

<strong>Output only IPFS Hash</strong><br>
Example: https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4<br>
Output: QmSoUWg5MR8cKHCzkAFUQMr2fyo3ozehAGcE6ywV51MVpW<br>

<strong>Output only IPFS Hash (url is already being processed)</strong><br>
Example: https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4<br>
Output: processing

<strong>Output JSON</strong><br>
Example: https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4&json=true<br>
Output: {"Url":"https:\/\/www.youtube.com\/watch?v=oe70Uhjc_F4","Hash":"QmSoUWg5MR8cKHCzkAFUQMr2fyo3ozehAGcE6ywV51MVpW","Size":"23310493","Error":false}<br>

<strong>Output JSON (url is already being processed)</strong><br>
Example: https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4&json=true<br>
Output: {"Url":"https:\/\/www.youtube.com\/watch?v=oe70Uhjc_F4","Hash":false,"Size":false,"Error":"processing"}<br>

<strong>Output JSON with error (size is too big)</strong><br>
Example: https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=vAiScGnRfP8&json=true<br>
Output: {"Url":"https:\/\/www.youtube.com\/watch?v=vAiScGnRfP8","Hash":null,"Size":null,"Error":"size"}<br>
