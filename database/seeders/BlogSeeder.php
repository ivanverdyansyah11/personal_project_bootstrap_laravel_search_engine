<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'categories_id' => 1,
            'blog_image' => "https://incubator.ucf.edu/wp-content/uploads/2023/07/artificial-intelligence-new-technology-science-futuristic-abstract-human-brain-ai-technology-cpu-central-processor-unit-chipset-big-data-machine-learning-cyber-mind-domination-generative-ai-scaled-1-1500x1000.jpg",
            'title' => "Understanding AI for Beginners",
            'slug' => Str::slug("Understanding AI for Beginners"),
            'content' => "Artificial intelligence (AI) is transforming industries. In this blog, we explore AI for beginners, helping you understand the fundamentals of machine learning, neural networks, and deep learning. AI’s role in automating tasks, making data-driven decisions, and its impact on various sectors like healthcare and finance will be highlighted. Moreover, we’ll discuss how you can start learning AI through online courses, books, and practical projects. Whether you’re a developer or a tech enthusiast, AI is an essential skill to master in the digital age, and this blog will provide the necessary steps to get started.",
        ]);

        Blog::create([
            'categories_id' => 2,
            'blog_image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSROePFvRDmSMxIevR9wyVVJSLnGEaVPM4idQ&s",
            'title' => "The Future of Web Development",
            'slug' => Str::slug("The Future of Web Development"),
            'content' => "Web development is rapidly evolving with the introduction of new frameworks and technologies. From the rise of Jamstack architecture to the increasing use of AI tools in frontend development, the future of web development promises faster, more efficient, and more secure web experiences. We’ll explore key trends such as progressive web apps (PWA), serverless computing, and WebAssembly. In addition, we’ll also cover how developers can adapt to these changes by learning new skills and embracing continuous learning. With the web constantly evolving, staying ahead of the curve is crucial for any web developer looking to remain competitive in the industry.",
        ]);

        Blog::create([
            'categories_id' => 2,
            'blog_image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1wgiagmKaEz21lhNpFf-7EOR1YNly9AxmYQ&s",
            'title' => "How to Learn Vue.js in 2024",
            'slug' => Str::slug("How to Learn Vue.js in 2024"),
            'content' => "Vue.js continues to be one of the most popular JavaScript frameworks for building user interfaces. With its ease of use and flexibility, learning Vue.js in 2024 is a great decision for developers looking to build interactive, dynamic web applications. This blog will guide you through the basics of Vue.js, including its reactive data-binding, component system, and state management using Vuex. Additionally, we’ll explore advanced topics such as Vue Router for building single-page applications (SPA) and integrating Vue with modern development tools like Vite. Whether you’re a beginner or an experienced developer, Vue.js offers powerful tools to enhance your frontend development skills.",
        ]);

        Blog::create([
            'categories_id' => 3,
            'blog_image' => "https://itbox.id/wp-content/uploads/2023/02/1660315042269_11zon.jpeg",
            'title' => "Top 10 UI/UX Design Trends in 2024",
            'slug' => Str::slug("Top 10 UI/UX Design Trends in 2024"),
            'content' => "In 2024, user experience (UX) and user interface (UI) design are set to reach new heights. With the rise of AI-driven design tools, personalized user experiences, and minimalistic design, this year promises to be an exciting one for designers. This blog will delve into the top 10 UI/UX design trends you should be aware of, including voice user interfaces (VUI), dark mode, and micro-interactions. Additionally, we’ll examine how accessibility and inclusivity will play an even more significant role in shaping UI/UX design decisions. By understanding these trends, designers can create more engaging and user-friendly digital experiences that cater to a global and diverse audience.",
        ]);

        Blog::create([
            'categories_id' => 2,
            'blog_image' => "https://static.blog.ruangdeveloper.com/2021/12/mengenal-framework-laravel.png",
            'title' => "Mastering Laravel for Backend Development",
            'slug' => Str::slug("Mastering Laravel for Backend Development"),
            'content' => "Laravel is a robust PHP framework designed for web artisans. This blog covers tips and techniques for mastering Laravel, from understanding its elegant syntax to working with Eloquent ORM and crafting RESTful APIs. Laravel’s powerful ecosystem, which includes features like task scheduling, event broadcasting, and queue management, makes it a top choice for backend development. We’ll also explore how to optimize Laravel applications for performance and security. With proper optimization techniques and best practices, developers can build scalable, maintainable applications that meet modern web development needs. Laravel is not just a framework but a toolset that empowers developers to build web applications efficiently.",
        ]);

        Blog::create([
            'categories_id' => 1,
            'blog_image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkUYTL6eGXd6P5608r-qnMedz-fSHSjHizmg&s",
            'title' => "Exploring the Benefits of AI in Business",
            'slug' => Str::slug("Exploring the Benefits of AI in Business"),
            'content' => "AI has numerous applications in business, ranging from automating processes to enhancing customer experiences. This blog examines various AI tools that businesses can leverage to improve efficiency and productivity. We’ll also discuss case studies where AI has successfully been implemented in different sectors.",
        ]);

        Blog::create([
            'categories_id' => 4,
            'blog_image' => "https://maukuliah.ap-south-1.linodeobjects.com/major/1702536462-u55NRFiH4Y.jpg",
            'title' => "The Importance of Cybersecurity in 2024",
            'slug' => Str::slug("The Importance of Cybersecurity in 2024"),
            'content' => "As technology continues to advance, cybersecurity remains a critical issue for individuals and organizations alike. This blog highlights the latest trends in cybersecurity, including threat detection, response strategies, and how to protect sensitive data in a digital world.",
        ]);

        Blog::create([
            'categories_id' => 5,
            'blog_image' => "https://www.kai.or.id/wp-content/uploads/2022/02/blockchain.jpeg",
            'title' => "Introduction to Blockchain Technology",
            'slug' => Str::slug("Introduction to Blockchain Technology"),
            'content' => "Blockchain technology has the potential to revolutionize various industries, including finance, healthcare, and supply chain management. This blog provides an overview of how blockchain works, its benefits, and its implications for the future.",
        ]);

        Blog::create([
            'categories_id' => 6,
            'blog_image' => "https://miro.medium.com/v2/resize:fit:2000/1*6z0rc52fKj1IAGzhhhkeOw.jpeg",
            'title' => "Designing for Accessibility in UX",
            'slug' => Str::slug("Designing for Accessibility in UX"),
            'content' => "Creating accessible user experiences is essential in today’s digital landscape. This blog discusses best practices for designing accessible websites and applications that cater to all users, including those with disabilities.",
        ]);

        Blog::create([
            'categories_id' => 7,
            'blog_image' => "https://www.flexjobs.com/blog/wp-content/uploads/2021/09/27061800/Remote-Work-Statistics-Navigating-the-New-Normal-2.jpg?w=1024",
            'title' => "The Rise of Remote Work in 2024",
            'slug' => Str::slug("The Rise of Remote Work in 2024"),
            'content' => "Remote work has become increasingly popular, especially after the pandemic. This blog explores the benefits and challenges of remote work, as well as tips for staying productive while working from home.",
        ]);

        Blog::create([
            'categories_id' => 8,
            'blog_image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHw3QM-NQY3E5rhg7azBtVkMN-DPXW-QYuwA&s",
            'title' => "The Future of E-commerce: Trends to Watch",
            'slug' => Str::slug("The Future of E-commerce: Trends to Watch"),
            'content' => "E-commerce is constantly evolving, with new trends emerging every year. This blog examines the latest e-commerce trends, including personalization, mobile shopping, and the use of AI in enhancing the customer shopping experience.",
        ]);

        Blog::create([
            'categories_id' => 1,
            'blog_image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRw4b6EqSXOBiAmUq16ALZDZUDnnknfH5o5MQ&s",
            'title' => "Understanding Machine Learning for Beginners",
            'slug' => Str::slug("Understanding Machine Learning for Beginners"),
            'content' => "Machine learning is a subset of AI that enables systems to learn from data. This blog provides an introduction to machine learning concepts, algorithms, and practical applications across various industries.",
        ]);

        Blog::create([
            'categories_id' => 9,
            'blog_image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_rkQlfGw1EJRkaoeuOoD-t_mLc5iz_HiNBQ&s",
            'title' => "Content Marketing Strategies for 2024",
            'slug' => Str::slug("Content Marketing Strategies for 2024"),
            'content' => "Effective content marketing strategies are vital for businesses to reach their target audience. This blog discusses various content marketing techniques, including SEO, social media marketing, and influencer partnerships.",
        ]);

        Blog::create([
            'categories_id' => 10,
            'blog_image' => "https://www.industryconnect.org/wp-content/uploads/2015/09/prog-languages.png",
            'title' => "The Benefits of Learning Programming Languages",
            'slug' => Str::slug("The Benefits of Learning Programming Languages"),
            'content' => "Learning programming languages can open up numerous career opportunities. This blog explores the benefits of programming, including problem-solving skills and the ability to create innovative solutions.",
        ]);

        Blog::create([
            'categories_id' => 11,
            'blog_image' => "https://www.techfor.id/wp-content/uploads/2020/10/1-1.jpg",
            'title' => "The Impact of 5G Technology",
            'slug' => Str::slug("The Impact of 5G Technology"),
            'content' => "5G technology promises to revolutionize the way we connect to the internet. This blog examines the potential applications of 5G, its benefits, and the challenges of widespread adoption.",
        ]);

        Blog::create([
            'categories_id' => 4,
            'blog_image' => "https://example.com/image1.jpg",
            'title' => "Unlocking Innovation: Why Cybersecurity Matters",
            'slug' => Str::slug("Unlocking Innovation: Why Cybersecurity Matters"),
            'content' => "In today's digital age, robust cybersecurity is critical for fostering innovation and protecting valuable data. This blog delves into the importance of cybersecurity, its role in enabling growth, and essential practices for businesses and individuals alike.",
        ]);

        Blog::create([
            'categories_id' => 1,
            'blog_image' => "https://example.com/image2.jpg",
            'title' => "Demystifying Artificial Intelligence (AI):  A Beginner's Guide",
            'slug' => Str::slug("Demystifying Artificial Intelligence (AI): A Beginner's Guide"),
            'content' => "Artificial intelligence (AI) has permeated various aspects of our lives. This blog offers a beginner-friendly explanation of what AI is, its applications, and potential future implications. We'll explore how AI can enhance our experiences while addressing ethical considerations.",
        ]);

        Blog::create([
            'categories_id' => 12,
            'blog_image' => "https://example.com/image3.jpg",
            'title' => "The Power of Cloud Computing: Scaling Up for Success",
            'slug' => Str::slug("The Power of Cloud Computing: Scaling Up for Success"),
            'content' => "Cloud computing has become a game-changer for businesses. This blog explores the advantages of cloud solutions, including scalability, cost-effectiveness, and enhanced collaboration. We'll discuss how cloud computing can empower businesses of all sizes to achieve their goals.",
        ]);

        Blog::create([
            'categories_id' => 13,
            'blog_image' => "https://example.com/image4.jpg",
            'title' => "Empowering the Future with Big Data: Insights and Applications",
            'slug' => Str::slug("Empowering the Future with Big Data: Insights and Applications"),
            'content' => "The ever-growing volume of data requires effective management and analysis. This blog examines the concept of big data, highlighting its value in extracting valuable insights, driving decisions, and shaping the future across various industries.",
        ]);

        Blog::create([
            'categories_id' => 14,
            'blog_image' => "https://example.com/image5.jpg",
            'title' => "Bridging the Gap: The Rise of Low-Code/No-Code Development",
            'slug' => Str::slug("Bridging the Gap: The Rise of Low-Code/No-Code Development"),
            'content' => "Low-code/no-code development platforms have democratized app development, making it accessible to a broader audience. This blog explores the benefits and potential of low-code/no-code solutions, discussing how they can empower citizen developers and streamline business processes.",
        ]);

        Blog::create([
            'categories_id' => 15,
            'blog_image' => "https://example.com/image6.jpg",
            'title' => "The Internet of Things (IoT): Connecting Our World",
            'slug' => Str::slug("The Internet of Things (IoT): Connecting Our World"),
            'content' => "The Internet of Things (IoT) is revolutionizing the way devices interact and collect data. This blog dives into the concept of IoT, exploring its applications in smart homes, cities, and industries, while acknowledging potential challenges and security considerations.",
        ]);

        Blog::create([
            'categories_id' => 5,
            'blog_image' => "https://example.com/image7.jpg",
            'title' => "Navigating the Future: The Importance of Blockchain Technology",
            'slug' => Str::slug("Navigating the Future: The Importance of Blockchain Technology"),
            'content' => "Blockchain technology has gained significant traction in recent years. This blog delves into the core principles of blockchain, exploring its potential for secure transactions, increased transparency, and fostering trust in a digital world. We'll discuss its applications across industries and its role in shaping the future.",
        ]);

        Blog::create([
            'categories_id' => 16,
            'blog_image' => "https://example.com/image8.jpg",
            'title' => "Empowering Communication: The Rise of Collaborative Tools",
            'slug' => Str::slug("Empowering Communication: The Rise of Collaborative Tools"),
            'content' => "In today's collaborative environment, effective communication tools are essential. This blog explores the rise of various collaborative tools, highlighting their benefits for real-time communication, project management, and team productivity.",
        ]);
    }
}
