// function updateLocalStorageAndCookies() {
//     let title = document.title;
//     if (title === "Главная") {
//         const pages = ["Главная", "Обо мне", "Мои интересы", "Учёба", "Фотоальбом", "Контакты", "Тест по инженерной графике", "История просмотра"];
//         if (localStorage.getItem("init") !== "YES") {
//             localStorage.setItem("init", "YES");
//             pages.forEach(element => {
//                 localStorage.setItem(element, 0);
//             });
//         }
//     }

//     // Update Local Storage
//     let visits = parseInt(localStorage.getItem(title)) || 0;
//     localStorage.setItem(title, ++visits);

//     // Update Cookies
//     let cookiesArray = document.cookie.split("; ");
//     let cookieValue = null;
//     cookiesArray.forEach(cookie => {
//         let [cookieName, value] = cookie.split("=");
//         if (cookieName === title) {
//             cookieValue = value;
//         }
//     });
//     visits = parseInt(cookieValue) || 0;
//     document.cookie = `${title}=${++visits}; path=/`;
// }

// // Call the function when needed, such as when a page loads
// updateLocalStorageAndCookies();
