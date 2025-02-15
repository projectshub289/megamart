<?php
$team_members = [
    [
        "name" => "D Priya Darshini",
        "role" => "Web Developer & Python Developer",
        "email" => "darshini9989@gmail.com",
        "linkedin" => "https://www.linkedin.com/in/priyadarshini-dodda-reddy-gari-/",
        "phone" => "8688590662",
        "image" => "darshini.jpeg"
    ],
    [
        "name" => "Bhusetty Akhila",
        "role" => "Python Fullstack Developer",
        "email" => "akhilabhusetty17@gmail.com",
        "linkedin" => "https://www.linkedin.com/in/akhila-bhusetty-7b3788251/",
        "phone" => "8328491993",
        "image" => "jane_smith.jpg"
    ],
    [
        "name" => "B Pavan Kumar",
        "role" => "Web Developer",
        "email" => "Singampavankumar4@gmail.com",
        "linkedin" => "",
        "phone" => "77319 43835",
        "image" => "pavan.jpeg"
    ],
    [
        "name" => "G Varun Kumar",
        "role" => "Web Developer & Content Creator",
        "email" => "gandlavarunkumar@gmail.com",
        "linkedin" => "https://www.linkedin.com/in/varunkumar-gandla-3a6337335/",
        "phone" => "6302168556",
        "image" => "vk.jpeg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet Our Team</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #000; color: #fff; }
        .container { max-width: 1000px; margin: 50px auto; background: #111; padding: 20px; box-shadow: 0 0 15px rgba(0, 255, 255, 0.5); border-radius: 8px; }
        h1 { text-align: center; color: #0ff; text-shadow: 0 0 5px #0ff, 0 0 10px #0ff; }
        .team { display: flex; justify-content: space-around; flex-wrap: wrap; }
        .member { text-align: center; background: #222; padding: 20px; margin: 10px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 255, 255, 0.3); width: 220px; }
        .member img { width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #0ff; }
        .contact-info { font-size: 14px; margin-top: 10px; color: #0ff; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Meet Our Team</h1>
        <div class="team">
            <?php foreach ($team_members as $member): ?>
                <div class="member">
                    <img src="<?php echo htmlspecialchars($member['image']); ?>" alt="<?php echo htmlspecialchars($member['name']); ?>">
                    <h3 style="color: #ff0; text-shadow: 0 0 5px #ff0, 0 0 10px #ff0;"> <?php echo htmlspecialchars($member['name']); ?> </h3>
                    <p><?php echo htmlspecialchars($member['role']); ?></p>
                    <div class="contact-info">
                        <p>Email: <?php echo htmlspecialchars($member['email']); ?></p>
                        <p>LinkedIn: <a href="<?php echo htmlspecialchars($member['linkedin']); ?>" target="_blank" style="color: #0ff;">Profile</a></p>
                        <p>Phone: <?php echo htmlspecialchars($member['phone']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
