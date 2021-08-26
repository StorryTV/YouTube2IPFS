# YouTube2IPFS
Backup Youtube videos to IPFS

Output only IPFS Hash
Example: https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4
Output: QmSoUWg5MR8cKHCzkAFUQMr2fyo3ozehAGcE6ywV51MVpW

Output only IPFS Hash (url is already being processed)
Example: https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4
Output: processing

Output JSON
Example: https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4&json=true
Output: {"Url":"https:\/\/www.youtube.com\/watch?v=oe70Uhjc_F4","Hash":"QmSoUWg5MR8cKHCzkAFUQMr2fyo3ozehAGcE6ywV51MVpW","Size":"23310493","Error":false}

Output JSON (url is already being processed)
Example: https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4&json=true
Output: {"Url":"https:\/\/www.youtube.com\/watch?v=oe70Uhjc_F4","Hash":false,"Size":false,"Error":"processing"}

Output JSON with error (size is too big)
Example: https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=vAiScGnRfP8&json=true
Output: {"Url":"https:\/\/www.youtube.com\/watch?v=vAiScGnRfP8","Hash":null,"Size":null,"Error":"size"}
