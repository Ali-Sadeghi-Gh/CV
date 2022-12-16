function submit(name, email, subject) {
    let bool = confirm("اگر مایل به ارسال پیام هستید روی دکمه OK کلیک کنید.");
    if (bool) {
        let str = "date: " + Date() + ", name: " + name + ", email: " + email + ", subject: " + subject;
        alert("پیام شما ارسال شد.");
        window.open("contact-page.html", "_self");
    }
} 