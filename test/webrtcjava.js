window.onload = async () => {
    const video = document.getElementById('monitor');
    const canvas = document.getElementById('photo');
    const shutter = document.getElementById('shutter');
    
  
    try {
      video.srcObject = await navigator.mediaDevices.getUserMedia({video: true});
  
      await new Promise(resolve => video.onloadedmetadata = resolve);
      canvas.width = video.videoWidth;
      canvas.height = video.videoHeight;
      document.getElementById('splash').hidden = true;
      document.getElementById('app').hidden = false;
  
      shutter.onclick = () => canvas.getContext('2d').drawImage(video, 0, 0);
    } catch (err) {
      console.error(err);
    }
  };