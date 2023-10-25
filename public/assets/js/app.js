/*
 * Tab
 */
function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

function isMobileDevice() {
  return /Mobi/i.test(navigator.userAgent);
}

function calculateDistance(lat1, lon1, lat2, lon2) {
  const earthRadius = 6371;

  const latDiff = toRad(lat2 - lat1);
  const lonDiff = toRad(lon2 - lon1);

  const a =
    Math.sin(latDiff / 2) * Math.sin(latDiff / 2) +
    Math.cos(toRad(lat1)) *
    Math.cos(toRad(lat2)) *
    Math.sin(lonDiff / 2) *
    Math.sin(lonDiff / 2);

  const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

  const distance = earthRadius * c;
  return distance;
}

function toRad(value) {
  return (value * Math.PI) / 180;
}

function findUsersWithinRadius(users, latitude, longitude, radius) {
  const usersWithinRadius = [];

  for (const user of users) {
    if (user.long_address != longitude && user.lat_address != latitude) {
      const distance = calculateDistance(
        latitude,
        longitude,
        user.lat_address,
        user.long_address,
      );

      if (distance <= radius) {
        usersWithinRadius.push({
          info: user,
          distance: distance,
        });
      }
    }
  }

  return usersWithinRadius;
}

window.addEventListener('DOMContentLoaded', function () {
  if (document.getElementById("defaultOpen")) {
    document.getElementById("defaultOpen").click();
  }

  /*
   * Modal QR Code
   */
  var modal = document.getElementById("qr-modal");
  var button = document.getElementById("open-qr-modal");

  if (button) {
    button.onclick = function () {
      modal.style.display = "block";
    }
  }

  // It is for Chrome
  window.addEventListener('click', function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  })

  // It is for Safari
  window.addEventListener('touchstart', function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  });

  var modalEditInfor = document.getElementById("edit-information-modal");
  var buttonEditInfor = document.getElementById("open-edit-information");

  if (buttonEditInfor) {
    buttonEditInfor.onclick = function () {
      modalEditInfor.style.display = "block";
    }
  }

  window.addEventListener('click', function (event) {
    if (event.target == modalEditInfor) {
      modalEditInfor.style.display = "none";
    }
  })

  // It is for Safari
  window.addEventListener('touchstart', function (event) {
    if (event.target == modalEditInfor) {
      modalEditInfor.style.display = "none";
    }
  });

  /*
   * Album images
   */
  var swiper = new Swiper(".swiper", {
    pagination: {
      el: ".swiper-pagination",
    },
  });

  handleCutCover = (img, e) => {
    img.style.cursor = "move";
    let isMouseDown = false;
    let startY, startObjectPosition;
    const inputCoverPosition = document.getElementById('cover_position');

    img.addEventListener('mousedown', function (event) {
      isMouseDown = true;
      startY = event.clientY;
      startObjectPosition = parseObjectPosition(img.style.objectPosition);
    });

    img.addEventListener('mousemove', function (event) {
      event.preventDefault();
      event.stopImmediatePropagation();
      if (isMouseDown) {
        const deltaY = event.clientY - startY;
        const newObjectPositionY = startObjectPosition.y + (deltaY / 2);
        const limitedObjectPositionY = Math.max(0, Math.min(newObjectPositionY, 100));

        img.style.objectPosition = `50% ${limitedObjectPositionY}%`;
        inputCoverPosition.value = inputCoverPosition.value;
      }

      window.addEventListener('mouseup', function () {
        isMouseDown = false;
      });
    });

    function parseObjectPosition(objectPosition) {
      const values = objectPosition.split(' ');
      const x = parseInt(values[0], 10);
      const y = parseInt(values[1], 10);
      return { x, y };
    }
  }

  /*
   * Upload cover
   */
  const inputCover = document.getElementById('upload-cover');
  const previewImageCover = document.getElementById('preview-cover');
  const btnCover = document.getElementById('button-cover');
  const settingCoverPosition = document.getElementById('setting_cover_position');

  if (inputCover) {
    inputCover.addEventListener('change', function (e) {
      previewImageCover.onmousedown = handleCutCover(previewImageCover, e);

      if (isMobileDevice()) {
        const inputCoverPosition = document.getElementById('cover_position');
        settingCoverPosition.innerHTML = '<input type="range" id="setting-position-cover-bar" class="absolute right-[-2rem] top-[7rem]" min="0" max="100" style="transform: rotate(270deg)" />';

        const settingCoverPositionBar = document.getElementById('setting-position-cover-bar');
        settingCoverPositionBar.addEventListener('input', function (e) {
          inputCoverPosition.value = e.target.value;
          previewImageCover.style.objectPosition = `50% ${e.target.value}%`;
        })
      }

      const file = e.target.files[0];

      if (file && file.type.startsWith('image/')) {
        btnCover.style.display = "block";
        const reader = new FileReader();

        reader.onload = function (e) {
          previewImageCover.src = e.target.result;
        };

        reader.readAsDataURL(file);
      }
    });
  }

  /*
   * Upload avatar
   */
  const inputAvatar = document.getElementById('upload-avatar');
  const previewImageAvatar = document.getElementById('preview-avatar');
  const btnAvatar = document.getElementById('button-avatar');

  if (inputAvatar) {
    inputAvatar.addEventListener('change', function (e) {
      const file = e.target.files[0];

      if (file && file.type.startsWith('image/')) {
        btnAvatar.style.display = "block";
        const reader = new FileReader();

        reader.onload = function (e) {
          previewImageAvatar.src = e.target.result;
        };

        reader.readAsDataURL(file);
      }
    });
  }

  /*
   * Upload image
   */
  const inputImage = document.getElementById('image');
  const previewImage = document.getElementById('preview-image');

  if (inputImage) {
    inputImage.addEventListener('change', function (e) {
      const file = e.target.files[0];

      if (file && file.type.startsWith('image/')) {
        const reader = new FileReader();

        reader.onload = function (e) {
          previewImage.src = e.target.result;
        };

        reader.readAsDataURL(file);
      }
    });
  }

  const params = new URLSearchParams(window.location.search);
  const userId = params.get('id');

  const qrCode = new QRCodeStyling({
    width: 250,
    height: 250,
    type: "svg",
    data: window.location.origin + '/bike.php?id=' + userId,
    image: window.location.origin + '/assets/images/favicon.png',
    cornersSquareOptions: {
      type: "extra-rounded",
      color: "#693D7C"
    },
    dotsOptions: {
      gradient: {
        type: 'linear',
        rotate: 65,
        colorStops: [{
          offset: 0,
          color: '#13B7D4'
        }, {
          offset: 1,
          color: '#7A246A'
        }]
      },
      type: "extra-rounded"
    },
    backgroundOptions: {
      color: "#fff",
    },
    imageOptions: {
      crossOrigin: "anonymous",
      margin: 10
    }
  });

  qrCode.append(document.getElementById("qr-code"));
  
  const list = document.getElementById('list-near-you');
  const users = document.getElementById('users');
  const userLatitude = document.getElementById('lat_address');
  const userLongitude = document.getElementById('long_address');
  const radiusInKm = 15;

  let usersWithinRadius = [];
  
  if (users && userLatitude && userLongitude) {
    usersWithinRadius = findUsersWithinRadius(
      JSON.parse(users.value),
      userLatitude.value,
      userLongitude.value,
      radiusInKm,
    );
  }

  usersWithinRadius.sort(function (a, b) { return a.distance - b.distance });

  usersWithinRadius.map(user => {
    list.innerHTML += `<div class="bg-white flex justify-between w-full my-2 shadow-md p-3 rounded-md">
          <div class="flex space-x-5">
              <img src="/assets/avatars/${user.info.avatar}" class="w-[50px] rounded-full" />
              <div>
                  <p>${user.info.full_name}</p>
                  <a href="https://fb.com/${user.info.facebook_id}" target="_blank">Facebook</a>
              </div>
          </div>
          <div class="flex justify-end text-sm">${user.distance.toFixed(2)} KM</div>
      </div>`;
  })

  var inputLong = document.getElementById('longtitude');
  var inputLat = document.getElementById('latitude');
  if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(function (position) {
      var longitude = position.coords.longitude;
      var latitude = position.coords.latitude;

      if (inputLat && inputLong) {
        inputLong.setAttribute('value', longitude);
        inputLat.setAttribute('value', latitude);
      }
    });
  }
});
