# YouTube2IPFS
Backup Youtube videos to IPFS
<br>
<strong>Output only IPFS Hash</strong><br>
Example: <a href="https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4" target="_blank" rel="noopener">https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4</a><br>
Output: QmSoUWg5MR8cKHCzkAFUQMr2fyo3ozehAGcE6ywV51MVpW<br>
<br>
<strong>Output only IPFS Hash (url is already being processed)</strong><br>
Example: <a href="https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4" target="_blank" rel="noopener">https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4</a><br>
Output: processing
<br>
<strong>Output JSON</strong><br>
Example: <a href="https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4&json=true" target="_blank" rel="noopener">https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4&json=true</a><br>
Output: {"Url":"https:\/\/www.youtube.com\/watch?v=oe70Uhjc_F4","Hash":"QmSoUWg5MR8cKHCzkAFUQMr2fyo3ozehAGcE6ywV51MVpW","Size":"23310493","Error":false}<br>
<br>
<strong>Output JSON (url is already being processed)</strong><br>
Example: <a href="https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4&json=true" target="_blank" rel="noopener">https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=oe70Uhjc_F4&json=true</a><br>
Output: {"Url":"https:\/\/www.youtube.com\/watch?v=oe70Uhjc_F4","Hash":false,"Size":false,"Error":"processing"}<br>
<br>
<strong>Output JSON with error (size is too big)</strong><br>
Example: <a href="https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=vAiScGnRfP8&json=true" target="_blank" rel="noopener">https://tools.storry.tv/youtube2ipfs/?video=https://www.youtube.com/watch?v=vAiScGnRfP8&json=true</a><br>
Output: {"Url":"https:\/\/www.youtube.com\/watch?v=vAiScGnRfP8","Hash":null,"Size":null,"Error":"size"}<br>
<br>
<br>
<strong>Installation</strong>
<p>sudo apt install youtube-dl</p>
<p>sudo youtube-dl -U</p>
<br>
<p>For IPFS installation check: <a href="https://ipfs.io/ipfs/bafybeie4pj7lrqiiwwlvazbbxxwzydmcxhtczlw63plqass3kn2br2g5ye/install/ipfs-desktop/" target="_blank" rel="noopener">https://ipfs.io/ipfs/bafybeie4pj7lrqiiwwlvazbbxxwzydmcxhtczlw63plqass3kn2br2g5ye/install/ipfs-desktop/</a></p>
