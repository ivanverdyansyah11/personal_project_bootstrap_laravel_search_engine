-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 15, 2024 at 08:37 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blind_browser`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `categories_id` bigint NOT NULL,
  `blog_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `categories_id`, `blog_image`, `title`, `slug`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'https://incubator.ucf.edu/wp-content/uploads/2023/07/artificial-intelligence-new-technology-science-futuristic-abstract-human-brain-ai-technology-cpu-central-processor-unit-chipset-big-data-machine-learning-cyber-mind-domination-generative-ai-scaled-1-1500x1000.jpg', 'Understanding AI for Beginners', 'understanding-ai-for-beginners', 'Artificial intelligence (AI) is transforming industries. In this blog, we explore AI for beginners, helping you understand the fundamentals of machine learning, neural networks, and deep learning. AI’s role in automating tasks, making data-driven decisions, and its impact on various sectors like healthcare and finance will be highlighted. Moreover, we’ll discuss how you can start learning AI through online courses, books, and practical projects. Whether you’re a developer or a tech enthusiast, AI is an essential skill to master in the digital age, and this blog will provide the necessary steps to get started.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(2, 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSROePFvRDmSMxIevR9wyVVJSLnGEaVPM4idQ&s', 'The Future of Web Development', 'the-future-of-web-development', 'Web development is rapidly evolving with the introduction of new frameworks and technologies. From the rise of Jamstack architecture to the increasing use of AI tools in frontend development, the future of web development promises faster, more efficient, and more secure web experiences. We’ll explore key trends such as progressive web apps (PWA), serverless computing, and WebAssembly. In addition, we’ll also cover how developers can adapt to these changes by learning new skills and embracing continuous learning. With the web constantly evolving, staying ahead of the curve is crucial for any web developer looking to remain competitive in the industry.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(3, 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1wgiagmKaEz21lhNpFf-7EOR1YNly9AxmYQ&s', 'How to Learn Vue.js in 2024', 'how-to-learn-vuejs-in-2024', 'Vue.js continues to be one of the most popular JavaScript frameworks for building user interfaces. With its ease of use and flexibility, learning Vue.js in 2024 is a great decision for developers looking to build interactive, dynamic web applications. This blog will guide you through the basics of Vue.js, including its reactive data-binding, component system, and state management using Vuex. Additionally, we’ll explore advanced topics such as Vue Router for building single-page applications (SPA) and integrating Vue with modern development tools like Vite. Whether you’re a beginner or an experienced developer, Vue.js offers powerful tools to enhance your frontend development skills.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(4, 3, 'https://itbox.id/wp-content/uploads/2023/02/1660315042269_11zon.jpeg', 'Top 10 UI/UX Design Trends in 2024', 'top-10-uiux-design-trends-in-2024', 'In 2024, user experience (UX) and user interface (UI) design are set to reach new heights. With the rise of AI-driven design tools, personalized user experiences, and minimalistic design, this year promises to be an exciting one for designers. This blog will delve into the top 10 UI/UX design trends you should be aware of, including voice user interfaces (VUI), dark mode, and micro-interactions. Additionally, we’ll examine how accessibility and inclusivity will play an even more significant role in shaping UI/UX design decisions. By understanding these trends, designers can create more engaging and user-friendly digital experiences that cater to a global and diverse audience.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(5, 2, 'https://static.blog.ruangdeveloper.com/2021/12/mengenal-framework-laravel.png', 'Mastering Laravel for Backend Development', 'mastering-laravel-for-backend-development', 'Laravel is a robust PHP framework designed for web artisans. This blog covers tips and techniques for mastering Laravel, from understanding its elegant syntax to working with Eloquent ORM and crafting RESTful APIs. Laravel’s powerful ecosystem, which includes features like task scheduling, event broadcasting, and queue management, makes it a top choice for backend development. We’ll also explore how to optimize Laravel applications for performance and security. With proper optimization techniques and best practices, developers can build scalable, maintainable applications that meet modern web development needs. Laravel is not just a framework but a toolset that empowers developers to build web applications efficiently.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(6, 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkUYTL6eGXd6P5608r-qnMedz-fSHSjHizmg&s', 'Exploring the Benefits of AI in Business', 'exploring-the-benefits-of-ai-in-business', 'AI has numerous applications in business, ranging from automating processes to enhancing customer experiences. This blog examines various AI tools that businesses can leverage to improve efficiency and productivity. We’ll also discuss case studies where AI has successfully been implemented in different sectors.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(7, 4, 'https://maukuliah.ap-south-1.linodeobjects.com/major/1702536462-u55NRFiH4Y.jpg', 'The Importance of Cybersecurity in 2024', 'the-importance-of-cybersecurity-in-2024', 'As technology continues to advance, cybersecurity remains a critical issue for individuals and organizations alike. This blog highlights the latest trends in cybersecurity, including threat detection, response strategies, and how to protect sensitive data in a digital world.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(8, 5, 'https://www.kai.or.id/wp-content/uploads/2022/02/blockchain.jpeg', 'Introduction to Blockchain Technology', 'introduction-to-blockchain-technology', 'Blockchain technology has the potential to revolutionize various industries, including finance, healthcare, and supply chain management. This blog provides an overview of how blockchain works, its benefits, and its implications for the future.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(9, 6, 'https://miro.medium.com/v2/resize:fit:2000/1*6z0rc52fKj1IAGzhhhkeOw.jpeg', 'Designing for Accessibility in UX', 'designing-for-accessibility-in-ux', 'Creating accessible user experiences is essential in today’s digital landscape. This blog discusses best practices for designing accessible websites and applications that cater to all users, including those with disabilities.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(10, 7, 'https://www.flexjobs.com/blog/wp-content/uploads/2021/09/27061800/Remote-Work-Statistics-Navigating-the-New-Normal-2.jpg?w=1024', 'The Rise of Remote Work in 2024', 'the-rise-of-remote-work-in-2024', 'Remote work has become increasingly popular, especially after the pandemic. This blog explores the benefits and challenges of remote work, as well as tips for staying productive while working from home.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(11, 8, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHw3QM-NQY3E5rhg7azBtVkMN-DPXW-QYuwA&s', 'The Future of E-commerce: Trends to Watch', 'the-future-of-e-commerce-trends-to-watch', 'E-commerce is constantly evolving, with new trends emerging every year. This blog examines the latest e-commerce trends, including personalization, mobile shopping, and the use of AI in enhancing the customer shopping experience.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(12, 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRw4b6EqSXOBiAmUq16ALZDZUDnnknfH5o5MQ&s', 'Understanding Machine Learning for Beginners', 'understanding-machine-learning-for-beginners', 'Machine learning is a subset of AI that enables systems to learn from data. This blog provides an introduction to machine learning concepts, algorithms, and practical applications across various industries.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(13, 9, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_rkQlfGw1EJRkaoeuOoD-t_mLc5iz_HiNBQ&s', 'Content Marketing Strategies for 2024', 'content-marketing-strategies-for-2024', 'Effective content marketing strategies are vital for businesses to reach their target audience. This blog discusses various content marketing techniques, including SEO, social media marketing, and influencer partnerships.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(14, 10, 'https://www.industryconnect.org/wp-content/uploads/2015/09/prog-languages.png', 'The Benefits of Learning Programming Languages', 'the-benefits-of-learning-programming-languages', 'Learning programming languages can open up numerous career opportunities. This blog explores the benefits of programming, including problem-solving skills and the ability to create innovative solutions.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(15, 11, 'https://www.techfor.id/wp-content/uploads/2020/10/1-1.jpg', 'The Impact of 5G Technology', 'the-impact-of-5g-technology', '5G technology promises to revolutionize the way we connect to the internet. This blog examines the potential applications of 5G, its benefits, and the challenges of widespread adoption.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(16, 4, 'https://example.com/image1.jpg', 'Unlocking Innovation: Why Cybersecurity Matters', 'unlocking-innovation-why-cybersecurity-matters', 'In today\'s digital age, robust cybersecurity is critical for fostering innovation and protecting valuable data. This blog delves into the importance of cybersecurity, its role in enabling growth, and essential practices for businesses and individuals alike.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(17, 1, 'https://example.com/image2.jpg', 'Demystifying Artificial Intelligence (AI):  A Beginner\'s Guide', 'demystifying-artificial-intelligence-ai-a-beginners-guide', 'Artificial intelligence (AI) has permeated various aspects of our lives. This blog offers a beginner-friendly explanation of what AI is, its applications, and potential future implications. We\'ll explore how AI can enhance our experiences while addressing ethical considerations.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(18, 12, 'https://example.com/image3.jpg', 'The Power of Cloud Computing: Scaling Up for Success', 'the-power-of-cloud-computing-scaling-up-for-success', 'Cloud computing has become a game-changer for businesses. This blog explores the advantages of cloud solutions, including scalability, cost-effectiveness, and enhanced collaboration. We\'ll discuss how cloud computing can empower businesses of all sizes to achieve their goals.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(19, 13, 'https://example.com/image4.jpg', 'Empowering the Future with Big Data: Insights and Applications', 'empowering-the-future-with-big-data-insights-and-applications', 'The ever-growing volume of data requires effective management and analysis. This blog examines the concept of big data, highlighting its value in extracting valuable insights, driving decisions, and shaping the future across various industries.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(20, 14, 'https://example.com/image5.jpg', 'Bridging the Gap: The Rise of Low-Code/No-Code Development', 'bridging-the-gap-the-rise-of-low-codeno-code-development', 'Low-code/no-code development platforms have democratized app development, making it accessible to a broader audience. This blog explores the benefits and potential of low-code/no-code solutions, discussing how they can empower citizen developers and streamline business processes.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(21, 15, 'https://example.com/image6.jpg', 'The Internet of Things (IoT): Connecting Our World', 'the-internet-of-things-iot-connecting-our-world', 'The Internet of Things (IoT) is revolutionizing the way devices interact and collect data. This blog dives into the concept of IoT, exploring its applications in smart homes, cities, and industries, while acknowledging potential challenges and security considerations.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(22, 5, 'https://example.com/image7.jpg', 'Navigating the Future: The Importance of Blockchain Technology', 'navigating-the-future-the-importance-of-blockchain-technology', 'Blockchain technology has gained significant traction in recent years. This blog delves into the core principles of blockchain, exploring its potential for secure transactions, increased transparency, and fostering trust in a digital world. We\'ll discuss its applications across industries and its role in shaping the future.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(23, 16, 'https://example.com/image8.jpg', 'Empowering Communication: The Rise of Collaborative Tools', 'empowering-communication-the-rise-of-collaborative-tools', 'In today\'s collaborative environment, effective communication tools are essential. This blog explores the rise of various collaborative tools, highlighting their benefits for real-time communication, project management, and team productivity.', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_blogs`
--

CREATE TABLE `category_blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_blogs`
--

INSERT INTO `category_blogs` (`id`, `name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Artificial Intelligence', 'artificial-intelligence', '2024-10-15 10:44:58', '2024-10-15 10:44:58', NULL),
(2, 'Web Development', 'web-development', '2024-10-15 10:44:58', '2024-10-15 10:44:58', NULL),
(3, 'UI/UX Design', 'ui/ux-design', '2024-10-15 10:44:58', '2024-10-15 10:44:58', NULL),
(4, 'Cybersecurity', 'cybersecurity', '2024-10-15 10:44:58', '2024-10-15 10:44:58', NULL),
(5, 'Blockchain', 'blockchain', '2024-10-15 10:44:58', '2024-10-15 10:44:58', NULL),
(6, 'Work Culture', 'work-culture', '2024-10-15 10:44:58', '2024-10-15 10:44:58', NULL),
(7, 'E-commerce', 'e-commerce', '2024-10-15 10:44:58', '2024-10-15 10:44:58', NULL),
(8, 'Marketing', 'marketing', '2024-10-15 10:44:58', '2024-10-15 10:44:58', NULL),
(9, 'Education', 'education', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(10, 'Technology', 'technology', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(11, 'Cloud Computing', 'cloud-computing', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(12, 'Big Data', 'big-data', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(13, 'Development', 'development', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(14, 'Internet of Things', 'internet-of-things', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL),
(15, 'Collaboration', 'collaboration', '2024-10-15 10:44:59', '2024-10-15 10:44:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_10_15_125942_create_blogs_table', 1),
(6, '2024_10_15_181811_create_category_blogs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_categories_id_index` (`categories_id`);

--
-- Indexes for table `category_blogs`
--
ALTER TABLE `category_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `category_blogs`
--
ALTER TABLE `category_blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
