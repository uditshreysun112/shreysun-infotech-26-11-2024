<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Shreysun Global Infotech</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <meta name="robots" content="noindex, nofollow" />

    <!-- Favicons -->
    <link href="images/favicon.png" rel="icon" />
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/aos.css" rel="stylesheet" />
    <link href="css/glightbox.min.css" rel="stylesheet" />
    <link href="css/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="css/main.css" rel="stylesheet" />
    <?php
    include("header.php");
    ?><br /><br /><br />
    <!-- End Header -->
    <style>
        /* Blog Details Page Styles */
        .blog-details {
            padding: 30px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            background: #fff;
        }

        .blog-details .post-img {
            margin: -30px -30px 20px -30px;
            overflow: hidden;
        }

        .blog-details .title {
            font-size: 28px;
            font-weight: 700;
            padding: 0;
            margin: 20px 0 0 0;
            color: #012970;
        }

        .blog-details .meta-top {
            margin-top: 20px;
            color: #777777;
        }

        .blog-details .meta-top ul {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .blog-details .meta-top ul li+li {
            padding-left: 20px;
        }

        .blog-details .meta-top i {
            font-size: 16px;
            margin-right: 8px;
            color: #4154f1;
        }

        .blog-details .content {
            margin-top: 20px;
        }

        .blog-details .content blockquote {
            padding: 20px;
            background-color: #f6f9ff;
            border-left: 4px solid #4154f1;
            margin: 20px 0;
        }

        .blog-details .meta-bottom {
            padding-top: 10px;
            border-top: 1px solid #eee;
        }

        .blog-details .meta-bottom i {
            color: #4154f1;
            font-size: 14px;
        }

        .blog-details .meta-bottom .cats {
            list-style: none;
            display: inline;
            padding: 0;
            font-size: 14px;
        }

        .blog-details .meta-bottom .cats li {
            display: inline-block;
            margin-right: 10px;
        }

        .blog-details .meta-bottom .tags {
            list-style: none;
            display: inline;
            padding: 0;
            font-size: 14px;
        }

        .blog-details .meta-bottom .tags li {
            display: inline-block;
            margin-right: 4px;
        }

        /* Blog Author */
        .blog-author {
            padding: 20px;
            margin-top: 30px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            background: #fff;
        }

        .blog-author img {
            width: 120px;
            margin-right: 20px;
        }

        .blog-author h4 {
            font-weight: 600;
            font-size: 22px;
            margin-bottom: 10px;
            color: #012970;
        }

        .blog-author .social-links {
            margin-bottom: 10px;
        }

        .blog-author .social-links a {
            color: #4154f1;
            margin-right: 10px;
        }

        /* Comments */
        .blog-comments {
            margin-top: 30px;
        }

        .blog-comments .comments-count {
            font-weight: bold;
            color: #012970;
        }

        .blog-comments .comment {
            margin-top: 30px;
            padding: 20px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            background: #fff;
        }

        .blog-comments .comment .comment-img {
            width: 80px;
            margin-right: 20px;
        }

        .blog-comments .comment h5 {
            font-size: 16px;
            margin-bottom: 2px;
        }

        .blog-comments .comment time {
            display: block;
            font-size: 14px;
            color: #777777;
            margin-bottom: 5px;
        }

        .blog-comments .comment.comment-reply {
            margin-left: 40px;
        }

        .blog-comments .reply-form {
            margin-top: 30px;
            padding: 30px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            background: #fff;
        }

        .blog-comments .reply-form h4 {
            font-weight: bold;
            color: #012970;
        }

        .blog-comments .reply-form p {
            font-size: 14px;
        }

        .blog-comments .reply-form input {
            border-radius: 4px;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #eee;
        }

        .blog-comments .reply-form input:focus {
            box-shadow: none;
            border-color: #4154f1;
        }

        .blog-comments .reply-form textarea {
            border-radius: 4px;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #eee;
        }

        .blog-comments .reply-form textarea:focus {
            box-shadow: none;
            border-color: #4154f1;
        }

        /* Sidebar Styles */
        .sidebar {
            padding: 30px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            background: #fff;
        }

        .sidebar .sidebar-title {
            font-size: 20px;
            font-weight: 700;
            padding: 0;
            margin: 0;
            color: #012970;
        }

        .sidebar .sidebar-item {
            margin-bottom: 30px;
        }

        .sidebar .search-form {
            position: relative;
        }

        .sidebar .search-form input {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 4px;
            width: 100%;
        }

        .sidebar .search-form input:focus {
            box-shadow: none;
            border-color: #4154f1;
        }

        .sidebar .search-form button {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            border: 0;
            background: none;
            font-size: 16px;
            padding: 0 15px;
            margin: 2px;
            background: #4154f1;
            color: #fff;
            border-radius: 0 4px 4px 0;
        }

        .sidebar .categories ul {
            list-style: none;
            padding: 0;
        }

        .sidebar .categories ul li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .sidebar .categories ul a {
            color: #012970;
            transition: 0.3s;
        }

        .sidebar .categories ul a:hover {
            color: #4154f1;
        }

        .sidebar .categories ul a span {
            padding-left: 5px;
            color: #777777;
            font-size: 14px;
        }

        .sidebar .recent-posts .post-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .sidebar .recent-posts img {
            width: 80px;
            margin-right: 15px;
        }

        .sidebar .recent-posts h4 {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .sidebar .recent-posts h4 a {
            color: #012970;
            transition: 0.3s;
        }

        .sidebar .recent-posts h4 a:hover {
            color: #4154f1;
        }

        .sidebar .recent-posts time {
            display: block;
            font-size: 14px;
            color: #777777;
        }

        .sidebar .tags {
            margin-bottom: 0;
        }

        .sidebar .tags ul {
            list-style: none;
            padding: 0;
        }

        .sidebar .tags ul li {
            display: inline-block;
            margin: 0 4px 8px 0;
        }

        .sidebar .tags ul a {
            color: #012970;
            padding: 6px 14px;
            font-size: 14px;
            display: inline-block;
            border: 1px solid #eee;
            border-radius: 4px;
            transition: 0.3s;
        }

        .sidebar .tags ul a:hover {
            color: #fff;
            background: #4154f1;
            border-color: #4154f1;
        }
    </style>

    <script>
        // JavaScript for handling comment replies
        document.addEventListener("DOMContentLoaded", function () {
            // Handle reply button clicks
            const replyButtons = document.querySelectorAll(".reply");
            const replyForm = document.querySelector(".reply-form");

            replyButtons.forEach((button) => {
                button.addEventListener("click", function (e) {
                    e.preventDefault();

                    // Scroll to reply form
                    replyForm.scrollIntoView({ behavior: "smooth" });

                    // Focus on the comment textarea
                    const textarea = replyForm.querySelector("textarea");
                    textarea.focus();
                });
            });

            // Form validation
            const commentForm = document.querySelector(".reply-form form");
            if (commentForm) {
                commentForm.addEventListener("submit", function (e) {
                    e.preventDefault();

                    const name = commentForm.querySelector('input[name="name"]').value;
                    const email = commentForm.querySelector(
                        'input[name="email"]'
                    ).value;
                    const comment = commentForm.querySelector(
                        'textarea[name="comment"]'
                    ).value;

                    // Basic validation
                    if (!name || !email || !comment) {
                        alert("Please fill in all required fields");
                        return;
                    }

                    // Email validation
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(email)) {
                        alert("Please enter a valid email address");
                        return;
                    }

                    // Here you would typically send the form data to your server
                    // For now, we'll just show a success message
                    alert("Comment submitted successfully!");
                    commentForm.reset();
                });
            }

            // Search form functionality
            const searchForm = document.querySelector(".search-form form");
            if (searchForm) {
                searchForm.addEventListener("submit", function (e) {
                    e.preventDefault();
                    const searchTerm = this.querySelector("input").value;

                    if (!searchTerm.trim()) {
                        alert("Please enter a search term");
                        return;
                    }

                    // Here you would typically handle the search
                    // For now, we'll just show an alert
                    alert("Searching for: " + searchTerm);
                });
            }
        });
    </script>

    <main id="main">
        <!-- Blog Details Page Title -->
        <!-- <div class="page-title">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-10 text-center">
              <h2>Blog Details</h2>
              <nav class="d-flex justify-content-center">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
                  <li class="breadcrumb-item active">Blog Details</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div> -->
        <!-- End Page Title -->
        <br /><br /><br /><br />
        <!-- Blog Details Section -->
        <section id="blog" class="blog">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <article class="blog-details">
                            <div class="post-img">
                                <img src="images/blog-1.jpg" alt="" class="img-fluid" />
                            </div>

                            <h2 class="title">Your Blog Post Title Goes Here</h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> John Doe
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-clock"></i> Jan 1, 2024
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-chat-dots"></i> 12 Comments
                                    </li>
                                </ul>
                            </div>

                            <div class="content">
                                <p>
                                    Your blog post content goes here. This is the main content
                                    area where you can write your article.
                                </p>

                                <blockquote>
                                    <p>
                                        This is a blockquote. You can use it to highlight
                                        important quotes or passages from your content.
                                    </p>
                                </blockquote>

                                <h3>Subheading Goes Here</h3>
                                <p>
                                    More content for your blog post. You can add multiple
                                    paragraphs, images, and other elements here.
                                </p>
                            </div>

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">Business</a></li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div>
                        </article>

                        <!-- Blog Author Bio -->
                        <div class="blog-author d-flex align-items-center">
                            <img src="images/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="" />
                            <div>
                                <h4>John Doe</h4>
                                <div class="social-links">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                </div>
                                <p>
                                    Author bio goes here. Write a brief description about the
                                    author of this blog post.
                                </p>
                            </div>
                        </div>

                        <!-- Blog Comments -->
                        <div class="blog-comments">
                            <h4 class="comments-count">12 Comments</h4>

                            <div class="comment">
                                <div class="d-flex">
                                    <div class="comment-img">
                                        <img src="images/comments-1.jpg" alt="" />
                                    </div>
                                    <div>
                                        <h5><a href="">Jane Smith</a></h5>
                                        <time datetime="2024-01-01">01 Jan, 2024</time>
                                        <p>
                                            This is a sample comment. Comments from readers will
                                            appear here.
                                        </p>
                                        <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Comment Reply -->
                            <div class="comment comment-reply">
                                <div class="d-flex">
                                    <div class="comment-img">
                                        <img src="images/comments-2.jpg" alt="" />
                                    </div>
                                    <div>
                                        <h5><a href="">John Doe</a></h5>
                                        <time datetime="2024-01-02">02 Jan, 2024</time>
                                        <p>This is a reply to the comment above.</p>
                                        <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Reply Form -->
                            <div class="reply-form">
                                <h4>Leave a Reply</h4>
                                <p>Your email address will not be published.</p>
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input name="name" type="text" class="form-control"
                                                placeholder="Your Name*" />
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="email" type="text" class="form-control"
                                                placeholder="Your Email*" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group">
                                            <textarea name="comment" class="form-control"
                                                placeholder="Your Comment*"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Post Comment
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <!-- Search Box -->
                            <div class="sidebar-item search-form">
                                <h3 class="sidebar-title">Search</h3>
                                <form action="" class="mt-3">
                                    <input type="text" />
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div>

                            <!-- Categories -->
                            <div class="sidebar-item categories">
                                <h3 class="sidebar-title">Categories</h3>
                                <ul class="mt-3">
                                    <li>
                                        <a href="#">General <span>(25)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Lifestyle <span>(12)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Travel <span>(5)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Design <span>(22)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Creative <span>(8)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Education <span>(14)</span></a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Recent Posts -->
                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">Recent Posts</h3>
                                <div class="mt-3">
                                    <div class="post-item mt-3">
                                        <img src="images/blog-recent-1.jpg" alt="" class="flex-shrink-0" />
                                        <div>
                                            <h4>
                                                <a href="blog-post.html">Recent Post Title 1</a>
                                            </h4>
                                            <time datetime="2024-01-01">Jan 1, 2024</time>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <img src="images/blog-recent-2.jpg" alt="" class="flex-shrink-0" />
                                        <div>
                                            <h4>
                                                <a href="blog-post.html">Recent Post Title 2</a>
                                            </h4>
                                            <time datetime="2024-01-02">Jan 2, 2024</time>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tags -->
                            <div class="sidebar-item tags">
                                <h3 class="sidebar-title">Tags</h3>
                                <ul class="mt-3">
                                    <li><a href="#">App</a></li>
                                    <li><a href="#">IT</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Mac</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Office</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    include("footer.php");
    ?>
    <!-- Vendor JS Files -->
    <script data-cfasync="false" src="js/email-decode.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/purecounter_vanilla.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="js/main.js"></script>
    </body>

</html>