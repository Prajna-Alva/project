<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: slogin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Full Width Jumbotron</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 20px;        
    }
</style>
</head>
    <body>
    <div class="bs-example">    
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
         <div class="page-header clearfix">
                        <a href="homepage.php" class="btn btn-success pull-right">previous page</a>
                    </div>
   <div class="page-header">
        <h1>These are few important interview questions.</h1>
        <p>1. Can you tell me a little about yourself?
This question seems simple, so many people fail to prepare for it, but it's crucial. Here's the deal: Don't give your complete employment (or personal) history. Instead give a pitch—one that’s concise and compelling and that shows exactly why you’re the right fit for the job. Start off with the 2-3 specific accomplishments or experiences that you most want the interviewer to know about, then wrap up talking about how that prior experience has positioned you for this specific role.

</p>

<p>
2. How did you hear about the position?
Another seemingly innocuous interview question, this is actually a perfect opportunity to stand out and show your passion for and connection to the company. For example, if you found out about the gig through a friend or professional contact, name drop that person, then share why you were so excited about it. If you discovered the company through an event or article, share that. Even if you found the listing through a random job board, share what, specifically, caught your eye about the role.

</p>
<p>

3. What do you know about the company?
Any candidate can read and regurgitate the company’s “About” page. So, when interviewers ask this, they aren't necessarily trying to gauge whether you understand the mission—they want to know whether you care about it. Start with one line that shows you understand the company's goals, using a couple key words and phrases from the website, but then go on to make it personal. Say, “I’m personally drawn to this mission because…” or “I really believe in this approach because…” and share a personal example or two.

</p>
<p>

4. Why do you want this job?
Again, companies want to hire people who are passionate about the job, so you should have a great answer about why you want the position. (And if you don't? You probably should apply elsewhere.) First, identify a couple of key factors that make the role a great fit for you (e.g., “I love customer support because I love the constant human interaction and the satisfaction that comes from helping someone solve a problem"), then share why you love the company (e.g., “I’ve always been passionate about education, and I think you guys are doing great things, so I want to be a part of it”).

</p>
<p>

5. Why should we hire you?
This interview question seems forward (not to mention intimidating!), but if you're asked it, you're in luck: There's no better setup for you to sell yourself and your skills to the hiring manager. Your job here is to craft an answer that covers three things: that you can not only do the work, you can deliver great results; that you'll really fit in with the team and culture; and that you'd be a better hire than any of the other candidates.

</p>
<p>


6. What are your greatest professional strengths?
When answering this question, interview coach Pamela Skillings recommends being accurate (share your true strengths, not those you think the interviewer wants to hear); relevant (choose your strengths that are most targeted to this particular position); and specific (for example, instead of “people skills,” choose “persuasive communication” or “relationship building”). Then, follow up with an example of how you've demonstrated these traits in a professional setting.

</p>
<p>

7. What do you consider to be your weaknesses?
What your interviewer is really trying to do with this question—beyond identifying any major red flags—is to gauge your self-awareness and honesty. So, “I can't meet a deadline to save my life” is not an option—but neither is “Nothing! I'm perfect!” Strike a balance by thinking of something that you struggle with but that you’re working to improve. For example, maybe you’ve never been strong at public speaking, but you've recently volunteered to run meetings to help you be more comfortable when addressing a crowd.

</p>
<p>

8. What is your greatest professional achievement?
Nothing says “hire me” better than a track record of achieving amazing results in past jobs, so don't be shy when answering this interview question! A great way to do so is by using the S-T-A-R method: Set up the situation and the task that you were required to complete to provide the interviewer with background context (e.g., “In my last job as a junior analyst, it was my role to manage the invoicing process”), but spend the bulk of your time describing what you actually did (the action) and what you achieved (the result). For example, “In one month, I streamlined the process, which saved my group 10 person-hours each month and reduced errors on invoices by 25%.”

</p>
<p>


9. Tell me about a challenge or conflict you've faced at work, and how you dealt with it.
In asking this behavioral interview question, “your interviewer wants to get a sense of how you will respond to conflict. Anyone can seem nice and pleasant in a job interview, but what will happen if you’re hired and Gladys in Compliance starts getting in your face?” says Skillings. Again, you'll want to use the S-T-A-R method, being sure to focus on how you handled the situation professionally and productively, and ideally closing with a happy ending, like how you came to a resolution or compromise.

</p>
<p>


10. Where do you see yourself in five years?
If asked this question, be honest and specific about your future goals, but consider this: A hiring manager wants to know a) if you've set realistic expectations for your career, b) if you have ambition (a.k.a., this interview isn't the first time you're considering the question), and c) if the position aligns with your goals and growth. Your best bet is to think realistically about where this position could take you and answer along those lines. And if the position isn’t necessarily a one-way ticket to your aspirations? It’s OK to say that you’re not quite sure what the future holds, but that you see this experience playing an important role in helping you make that decision.

</p>p
<p>

11. What's your dream job?
Along similar lines, the interviewer wants to uncover whether this position is really in line with your ultimate career goals. While “an NBA star” might get you a few laughs, a better bet is to talk about your goals and ambitions—and why this job will get you closer to them.

</p>
<p>


12. What other companies are you interviewing with?
Companies ask this for a number of reasons, from wanting to see what the competition is for you to sniffing out whether you're serious about the industry. “Often the best approach is to mention that you are exploring a number of other similar options in the company's industry,” says job search expert Alison Doyle. “It can be helpful to mention that a common characteristic of all the jobs you are applying to is the opportunity to apply some critical abilities and skills that you possess. For example, you might say 'I am applying for several positions with IT consulting firms where I can analyze client needs and translate them to development teams in order to find solutions to technology problems.'”
</p>
<p>


13. Why are you leaving your current job?
This is a toughie, but one you can be sure you'll be asked. Definitely keep things positive—you have nothing to gain by being negative about your past employers. Instead, frame things in a way that shows that you're eager to take on new opportunities and that the role you’re interviewing for is a better fit for you than your current or last position. For example, “I’d really love to be part of product development from beginning to end, and I know I’d have that opportunity here.” And if you were let go? Keep it simple: “Unfortunately, I was let go,” is a totally OK answer.

</p>
<p>


14. Why were you fired?
OK, if you get the admittedly much tougher follow-up question as to why you were let go (and the truth isn't exactly pretty), your best bet is to be honest (the job-seeking world is small, after all). But it doesn't have to be a deal-breaker. Share how you’ve grown and how you approach your job and life now as a result. If you can position the learning experience as an advantage for this next job, even better.

</p>
<p>

15. What are you looking for in a new position?
Hint: Ideally the same things that this position has to offer. Be specific.

</p>
<p>


16. What type of work environment do you prefer?
Hint: Ideally one that's similar to the environment of the company you're applying to. Be specific.

</p>
<p>


17. What's your management style?
The best managers are strong but flexible, and that's exactly what you want to show off in your answer. (Think something like, “While every situation and every team member requires a bit of a different strategy, I tend to approach my employee relationships as a coach...”) Then, share a couple of your best managerial moments, like when you grew your team from five to 15 or coached an underperforming employee to become the company's top salesperson.

</p>
<p>


18. What's a time you exercised leadership?
Depending on what's more important for the the role, you'll want to choose an example that showcases your project management skills (spearheading a project from end to end, juggling multiple moving parts) or one that shows your ability to confidently and effectively rally a team. And remember: “The best stories include enough detail to be believable and memorable,” says Skillings. “Show how you were a leader in this situation and how it represents your overall leadership experience and potential.”

</p>
<p>


19. What's a time you disagreed with a decision that was made at work?
Everyone disagrees with the boss from time to time, but in asking this interview question, hiring managers want to know that you can do so in a productive, professional way. “You don’t want to tell the story about the time when you disagreed but your boss was being a jerk and you just gave in to keep the peace. And you don’t want to tell the one where you realized you were wrong,” says Peggy McKee of Career Confidential. “Tell the one where your actions made a positive difference on the outcome of the situation, whether it was a work-related outcome or a more effective and productive working relationship.”

</p>
<p>


20. How would your boss and co-workers describe you?
First of all, be honest (remember, if you get this job, the hiring manager will be calling your former bosses and co-workers!). Then, try to pull out strengths and traits you haven't discussed in other aspects of the interview, such as your strong work ethic or your willingness to pitch in on other projects when needed.
</p>
<p>

21. Why was there a gap in your employment?
If you were unemployed for a period of time, be direct and to the point about what you’ve been up to (and hopefully, that’s a litany of impressive volunteer and other mind-enriching activities, like blogging or taking classes). Then, steer the conversation toward how you will do the job and contribute to the organization: “I decided to take a break at the time, but today I’m ready to contribute to this organization in the following ways.”

</p>
<p>


22. Can you explain why you changed career paths?
Don't be thrown off by this question—just take a deep breath and explain to the hiring manager why you've made the career decisions you have. More importantly, give a few examples of how your past experience is transferrable to the new role. This doesn't have to be a direct connection; in fact, it's often more impressive when a candidate can make seemingly irrelevant experience seem very relevant to the role.

</p>
<p>

23. How do you deal with pressure or stressful situations?
"Choose an answer that shows that you can meet a stressful situation head-on in a productive, positive manner and let nothing stop you from accomplishing your goals," says McKee. A great approach is to talk through your go-to stress-reduction tactics (making the world's greatest to-do list, stopping to take 10 deep breaths), and then share an example of a stressful situation you navigated with ease.

</p>
<p>


24. What would your first 30, 60, or 90 days look like in this role?
Start by explaining what you'd need to do to get ramped up. What information would you need? What parts of the company would you need to familiarize yourself with? What other employees would you want to sit down with? Next, choose a couple of areas where you think you can make meaningful contributions right away. (e.g., “I think a great starter project would be diving into your email marketing campaigns and setting up a tracking system for them.”) Sure, if you get the job, you (or your new employer) might decide there’s a better starting place, but having an answer prepared will show the interviewer where you can add immediate impact—and that you’re excited to get started.

</p>
<p>


25. What are your salary requirements?
The #1 rule of answering this question is doing your research on what you should be paid by using sites like Payscale and Glassdoor. You’ll likely come up with a range, and we recommend stating the highest number in that range that applies, based on your experience, education, and skills. Then, make sure the hiring manager knows that you're flexible. You're communicating that you know your skills are valuable, but that you want the job and are willing to negotiate.

</p>
<p>


26. What do you like to do outside of work?
Interviewers ask personal questions in an interview to “see if candidates will fit in with the culture [and] give them the opportunity to open up and display their personality, too,” says longtime hiring manager Mitch Fortner. “In other words, if someone asks about your hobbies outside of work, it’s totally OK to open up and share what really makes you tick. (Do keep it semi-professional, though: Saying you like to have a few beers at the local hot spot on Saturday night is fine. Telling them that Monday is usually a rough day for you because you’re always hungover is not.)”

</p>
<p>


27. If you were an animal, which one would you want to be?
Seemingly random personality-test type questions like these come up in interviews generally because hiring managers want to see how you can think on your feet. There's no wrong answer here, but you'll immediately gain bonus points if your answer helps you share your strengths or personality or connect with the hiring manager. Pro tip: Come up with a stalling tactic to buy yourself some thinking time, such as saying, “Now, that is a great question. I think I would have to say… ”

</p>
<p>

28. How many tennis balls can you fit into a limousine?
1,000? 10,000? 100,000? Seriously?

Well, seriously, you might get asked brainteaser questions like these, especially in quantitative jobs. But remember that the interviewer doesn’t necessarily want an exact number—he wants to make sure that you understand what’s being asked of you, and that you can set into motion a systematic and logical way to respond. So, just take a deep breath, and start thinking through the math. (Yes, it’s OK to ask for a pen and paper!)

</p>
<p>


29. Are you planning on having children?
Questions about your family status, gender (“How would you handle managing a team of all men?”), nationality (“Where were you born?”), religion, or age, are illegal—but they still get asked (and frequently). Of course, not always with ill intent—the interviewer might just be trying to make conversation—but you should definitely tie any questions about your personal life (or anything else you think might be inappropriate) back to the job at hand. For this question, think: “You know, I’m not quite there yet. But I am very interested in the career paths at your company. Can you tell me more about that?”

</p>
<p>


30. What do you think we could do better or differently?
This is a common one at startups (and one of our personal favorites here at The Muse). Hiring managers want to know that you not only have some background on the company, but that you're able to think critically about it and come to the table with new ideas. So, come with new ideas! What new features would you love to see? How could the company increase conversions? How could customer service be improved? You don’t need to have the company’s four-year strategy figured out, but do share your thoughts, and more importantly, show how your interests and expertise would lend themselves to the job.
</p>
<p>
31. Do you have any questions for us?
You probably already know that an interview isn't just a chance for a hiring manager to grill you—it's your opportunity to sniff out whether a job is the right fit for you. What do you want to know about the position? The company? The department? The team?

You'll cover a lot of this in the actual interview, so have a few less-common questions ready to go. We especially like questions targeted to the interviewer (“What's your favorite part about working here?") or the company's growth (“What can you tell me about your new products or plans for growth?")</p>
    </div>
    <style>
    body {
    background: url("IMG_20190713_114218753.jpg") no-repeat center fixed ;
   background-size:cover;


         }
    </style>
     <p><a href="homepage.php" class="btn btn-primary">Back</a></p>
</div> 
</div>
</div>
    </body>    
</html>                            