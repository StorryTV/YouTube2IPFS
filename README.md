# YouTube2IPFS
Backup Youtube videos to IPFS

Output only IPFS Hash<br>
Example: https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4<br>
Output: QmSoUWg5MR8cKHCzkAFUQMr2fyo3ozehAGcE6ywV51MVpW<br>

Output only IPFS Hash (url is already being processed)<br>
Example: https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4<br>
Output: processing

Output JSON<br>
Example: https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4&json=true<br>
Output: {"Url":"https:\/\/www.youtube.com\/watch?v=oe70Uhjc_F4","Hash":"QmSoUWg5MR8cKHCzkAFUQMr2fyo3ozehAGcE6ywV51MVpW","Size":"23310493","Error":false}<br>

Output JSON (url is already being processed)<br>
Example: https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4&json=true<br>
Output: {"Url":"https:\/\/www.youtube.com\/watch?v=oe70Uhjc_F4","Hash":false,"Size":false,"Error":"processing"}<br>

Output JSON with error (size is too big)<br>
Example: https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=vAiScGnRfP8&json=true<br>
Output: {"Url":"https:\/\/www.youtube.com\/watch?v=vAiScGnRfP8","Hash":null,"Size":null,"Error":"size"}<br>
