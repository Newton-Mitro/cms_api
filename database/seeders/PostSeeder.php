<?php

namespace Database\Seeders;

use Exception;
use Faker\Factory;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**========================================================================
 * ?                                ABOUT
 * @author         : Isrfil
 * @email          : israfil@cccul.com
 * @repo           : 
 * @createdOn      : 03-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : Application stage seeder
 *========================================================================**/

class PostSeeder extends Seeder
{

    public function run()
    {


        function generateHtml($title)
        {
            $faker = Factory::create();
            $paragraphs = $faker->paragraphs(rand(2, 10));
            $postcontent = "<h1>{$title}</h1>";
            foreach ($paragraphs as $para) {
                $postcontent .= "<p>{$para}</p>";
            }
            return $postcontent;
        }

        $image = "";

        DB::table('posts')->insert([
            'post_slug' => Str::slug('About Us', '-'),
            'post_title' => 'About Us',
            'post_content' => generateHtml('About Us'),
            // 'post_image' => $image,
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 1,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Brief Summery', '-'),
            'post_title' => 'Brief Summery',
            'post_content' => '<div>
            <h6>About CCCUL, Dhaka</h6>
            <p>An American Father named, Charles J. Young CSC founded The Christian Co-Operative Credit Union on July 3rd, 1955, which is also famously known as ‘Dhaka Credit’. According to the 1940 Co-Operative Act, Dhaka Credit was registered in 1958 with registration number “42/1958”.</p>
            <p>Dhaka Credit’s Head Office is located in Tejgaon, East Tejturibazar, Dhaka. It is a trustworthy financial institution providing various services to the Christian community in Bangladesh. Dhaka Credit is committed in providing the best services to its member with different schemes and activities to promote Thrifts & Savings to upgrade the members’ standard of living.</p>
            <p>Dhaka Credit is the first & largest Credit Union of its kind currently in Bangladesh. The operational area of Dhaka Credit includes Dhaka, Gazipur, Narayanganj & Munshiganj Districts with over 43,000 members currently active in Dhaka Credit. Dhaka Credit is currently providing various services through its 12 Service Centers and 20 Collection Booths. As of June 2022, there are nearly 600 professional staffs along with Part time and Students are currently employed in Dhaka Credit.</p>
            <p>Dhaka Credit is providing around 86 products with the policies being constantly updated to make the products more Member-Friendly and provide maximum benefits to the members.</p>
            <p>The Construction of the Divine Mercy Hospital at Kuchilabari in the District of Gazipur is under process and are looking to commence its operation in 2022. It is a 300-bed hospital situated in Gazipur, adjacent to Dhaka city. The vast infrastructure having most of the health service departments will be completed by 2022 and will start its operation by the end of the year. This mega project will follow a Medical College and a Nursing College in the hospital’s vast campus. This is the first & largest hospital project undertaken by a cooperative credit union in Bangladesh to demonstrate true Christian Love and Care.</p>
            <p>Dhaka Credit members have entered a digitization era. On February 6th 2021, Dhaka Credit launched its Mobile Financial Service (MFS) at the CBCB center during a workshop. The App is designed to provide convenience to the members through digital services that includes Transfer from one account to another, Cash Withdrawal through ATM, Information on Member’s Loan, Savings & Products and many more.</p>
            <p>The entire world is suffering from the COVID-19 crisis. Members of Dhaka Credit are also severely affected by this deadly virus, while every day, thousands of people are dying. Many members lost their jobs, faced losses in their business. Responding to this emergency period, Dhaka Credit took some initiative. Among them, awareness training, leaflet and face mask distribution, discount product distribution among jobless members, commodity loans, and goods sold in credit from Samabay Bazar run by Dhaka Credit.</p>
            <p>A total of 1400 needy members obtained the discount package for BDT 1700 (Approx. 20 USD), which the actual price of the package is BDT 3400 (Approx. 40 USD) from Samabay Bazaar Super Shop of Dhaka Credit. A total of 226 members received this package through this commodity loans. With this timely initiative, members were greatly benefited.</p>
            <p>Lastly, on 15th May 2021, we launched a savings product, namely Pension Benefit Scheme (PBS). We do not make any plans for our retirement life. The PBS will help us make our members retirement life better and non-dependent on others. This product will help them lead a reputable retirement life.</p>
            <p>Beside, providing various products and services, Dhaka Credit also has Resort and Training Center, World Class Child Care & Education Center, Co-Operative Shops, Security Services, Dhaka Credit Union School, Cultural Academy, Gym, Ambulance Service, Online DCTV & dcnewsbd.com news portals, IELTS & English Spoken Courses, Girls Hostel, Student Project, Health Project, Funeral Support Fund, Handicraft Training, Sewing Training, Chinese Cooking Training, McCarthy Library, Archives & Job Linking Cell.</p>
            <p>Some of the Loan products include General Loan, Higher Education Loan, Professional Loan, Business Loan, Small & Medium Business Loan, Loan against Monthly Savings, Industrial Loan, SOD Loan, Open Installment & Own Share Loan, Etc.</p>
            <p>Dhaka Credit has the utmost priority in serving its members with care and professionalism through its services and products. Dhaka Credit will always be beside its members during the time of need.</p>
            </div>',
            'post_image' => '/public/founder.jpg',
            'post_type_id' => 1,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Founder\'s Profile', '-'),
            'post_title' => 'Founder\'s Profile',
            'post_content' => '<div>
            <p>Rev. Fr. Charles J. Young CSC</p>
            <p>(Founder)</p>
            <p>The pioneer of the Credit Union Movement in Bangladesh, Fr. Charles J. Young CSC was born in May 3rd 1904, in New York, USA. His full name is Fr. Charles Joseph Young CSC. He was the founder of The Christian Co-Operative Credit Union Ltd. Dhaka, the largest Credit Union in Bangladesh and South Asia. Fr. Charles joined the seminary of the Holy Cross on September in 1923, and joined in the first verse in 1925 & accepted his blessing in 1928.</p>
            <p>In 1929, he obtained his BA degree from Notre Dame University of America. Later in 1933, after studying the theory of Theism at the Foreign Mission seminary in Washington, he was promoted as a Priest at Indiana Notre Dame University chapel. And in the same year he came to Bangladesh as a foreign missionary and did various pastoral and social activities in Dhaka and Mymensingh.</p>
            <p>In 1953, Lawrence L. Grenar CSC, Archbishop of Dhaka sent him to the Coady Institute of St. Francis Xavier University in Canada to acquire knowledge on Co-operatives. In 1955, coming back to Dhaka, he established The Christian Co-Operative Credit Union Ltd. Dhaka (Dhaka Credit) in order to bring the socio-economic development of the Christian community of the country. His philosophy in credit movement has been widely spread throughout the country.</p>
            <p>This theory brings radical changes in people’s lives. Later, using this theory, the non-governmental organization Grameen Bank won the Nobel Peace Prize. Many organizations of the country are working in the light of this theory. The Christian Co-Operative Credit Union Ltd. Dhaka is now the largest Credit Union of its kind in South Asia. The name of Fr. Charles J. Young CSC will be written in the history of Credit Movement of this region.</p>
            <p>He died on 14 November 1988 in a tragic road accident. He was buried in Tejgaon Holy Rosary Church in Dhaka. His death anniversary is celebrated every year with due honor.</p>
            </div>',
            'post_image' => '/public/founder.jpg',
            'post_type_id' => 1,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('President Message', '-'),
            'post_title' => 'President Message',
            'post_content' => '<div>
            <p>Dhaka Credit has already reached the dream of serving more then 43,000 Members, and now it’s looking for a bigger target in serving the community through various services and projects. In March 2021, the Vision-2023 has been set in the 6th three years strategic planning workshop.</p>
            <p>According to the Vision, Dhaka Credit will achieve assets amounting to nearly BDT 1500 Crore and more than 1,000 Employees in 2023. To implement the Vision 2023, various initiatives have been taken. To achieve these goals, Dhaka Credit is working with utmost dedication and hard work.</p>
            <p>With the recent launch of a 24×7 ATM service for our valuable members, Dhaka Credit has stepped into the new era of Technology-based services and One Big step closer to providing Banking Level services to our members under our operation area. It will be launching in more regions in the upcoming future.</p>
            <p>We believe that the ongoing projects of Dhaka Credit will transform it into a big institution. We have dreams of establishing a bank, an airline, a Daily Newspaper, a Satellite Television, a University, an International Standard Convention Center to serve the Christian community and the Country’s ordinary people. Dhaka Credit is going forward to achieve these goals. Giving equal dignity and importance to the contemporary Members, Dhaka Credit has adopted safe and productive investments, using modern technology, professionalism, and the highest standard of development, keeping in line with the global economy and progress.</p>
            <p>The highest priority has to be given to the Modernization and use of information technology for improving the quality of the services provided to the Members. Members are getting quick and quality service from Dhaka Credit compared to any other financial institution.</p>
            <p>The money market has always been a challenging market to conquer, but Dhaka Credit is going ahead by facing and overcoming all the challenges. Dhaka Credit is investing in different sectors through its Members by providing them with Loan facilities for their economic development and the country’s development.</p>
            <p>Some things have helped Dhaka Credit achieve new heights to obtain the highest-ranking Credit Union among its kind in South Asia. These are specific mission, vision, core values, techniques, working quality, professionalism, expertise, transparency, software, and modern Information Technology.</p>
            <p>Besides these projects, Dhaka Credit is contributing a lot in creating and developing small Entrepreneur, Education, Health, Culture, Young Leadership, Women Empowerment, Development of Children and Indigenous people. There are many Members of Dhaka Credit residing outside the Country. We are working hard to get them easy access to our services.</p>
            <p>Today, I would like to share with everyone with joy, Dhaka Credit has taken the biggest project in the history of Christians in Bangladesh. Establish the Divine Mercy Hospital is now visible. The infrastructure of the Hospital has already been revealed by raising its head on certain lands. We are hopeful that the medical treatment activities of the Hospital will start by 2022.</p>
            <p>Undoubtedly the Hospital will play an essential role in the Service Sector of the Country. Later, Dhaka Credit will work to establish a Nursing Institute and Medical College.</p>
            <p>Dhaka Credit is on the side of every member from birth to death. Following this, Dhaka Credit has launched Pension Benefit Scheme (PBS) product. Retired members will be able to enjoy a peaceful life through PBS. Nobody doesn’t have to depend on anyone.</p>
            <p>We have already spent about a year and a half since the current management committee took over. Shortly after taking responsibilities, the Covid-19 pandemic swept the world so that public life was in jeopardy. The economy collapses. Many members lost their jobs, faced losses in their business. To respond in this emergency period Dhaka Credit took some initiative. Among them, awareness training, leaflet and face mask distribution, discount product distribution among jobless members, commodity loans, and goods sell in credit from Samabay Bazar that runs by Dhaka Credit. A total of 1400 needy members obtained a discount product by BDT 1700 (equal 20 USD ) that’s the actual price is BDT 34 (equal 40 USD ) from Dhaka Credit. A total of 226 members received commodity loans. By this timely initiative, members were greatly benefited.</p>
            <p>Dhaka Credit is now considered a Brand. The reputation of Dhaka Credit has spread beyond the borders of the Country. It has become a role model for other Credit Unions to follow in Bangladesh and the rest of the world. Our goal is to lead the Credit Union Movement from the front in South Asia, including Bangladesh. Through its website, Dhaka Credit is spreading its vast information related to its activities worldwide. Dhaka Credit has a dream of building a Dhaka Credit (DC) Tower in Dhaka Metropolitan. It will be another milestone for Dhaka Credit, and hoping that the projects will be implemented during the existing board’s tenure. Each & Everyone is humbly requested to visit our facilities & experience the exceptional services provided by Dhaka Credit. With everyone’s Love, Blessing & Cooperation, we can go ahead and develop together.</p>
            <p>We portray true Christian Love and Care through the products & services of our great organization.</p>
            <p>Best Wishes to Everyone</p>
            <p>Pankaj Gilbert Costa</p>
            <p>President</p>
            <p>The Christian Co-Operative Credit Union Ltd; Dhaka</p>
            </div>',
            'post_image' => '/public/president.jpg',
            'post_type_id' => 1,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Our Story', '-'),
            'post_title' => 'Our Story',
            'post_content' => '<div>
            <p>An American Origin Priest named Father Charles J. Young CSC founded, The Christian Co-Operative Credit Union Limited on July 3rd, 1955, which is also popularly known as “Dhaka Credit”. It was registered under the Bengal Co-Operative Act 1940. Dhaka Credit started its journey with 50 members with tk. 25. According to the 1940 Co-Operative Act, Dhaka Credit was registered in 1958 with registration number “42/1958”.</p>
            <p>The main focus of this organization is to improve the standard of living of its members who are mainly situated in the operational areas in four districts, such as Dhaka, Gazipur, Narayanganj and Munshiganj districts. Gradually, Dhaka Credit is expanding its services to more common people irrespective of their Caste or Creed and exceeding the traditional dealings with Loan & Installment.</p>
            <p>Dhaka Credit’s Head Office is located in East Tejturibazar in the Dhaka Metropolitan Area. Currently Dhaka Credit has around 86 innovative products on Loans & Savings for its members and different kinds of social projects & services that are being developed and some already in service.</p>
            <p>Dhaka Credit is the first as well as the largest co-operative credit union of its kind in Bangladesh, with over 43,000 active members, 12 service centers, 20 collection booths and with nearly 600 highly qualified staff members. Dhaka Credit is constantly increasing its products & Projects to better satisfy the changing and demanding needs of the members and to keep up with the demand, Dhaka Credit is also increasing its workforce to provide better employment and also services to its Members.</p>
            <p>This organization has 22 members of Managing Board. Dhaka has celebrated its 66th anniversary on 3rd July, 2021.</p>
            <p>Dhaka Credit is currently operating projects such as Dhaka Credit Resort & Training Center, International Standard Childcare & Education Center, 2 Co-Operative Super Shops, Security Service, Dhaka Credit Union School, Cultural Academy, 2 multipurpose Projects, Gym, Ambulance Service, Internet-Based DCTVBD.com, news portal dcnewsbd.com, IELTS & English Spoken Course, 2 Girls Hostels, Students Project for part-time working students, Health Project, Funeral Support Fund, Mcarthy Library, Archives, Job Linking Cells, etc.</p>
            <p>Along with Savings Products, Dhaka Credit has a long list of Loan products that members can take advantage with low interest. These Loans includes General Loan, Business Loan, Car Loan, Capacity Based Loan, House Building Loan, Emergency Loan (Mother & Child), Competency Based Loan, Small & Medium Business Loan, Credit Ceiling Loan, Solvency Loan for Higher Education, Solvency Loan for Going Abroad, Top-Up Loan, Dhaka Credit Flat Purchase Loan, Flat Purchase Loan, Dhaka Metropolitan House Building Loan, Consumer Loan, Bill Pay Loan, Loan against Monthly Savings, Gym Loan, industrial Loan & General Credit Ceiling Loan, Loan against Long Term Savings Deposit, Secure Over Draft (SOD) Loan, Open Installment Loan, Own Share Loan, Etc.</p>
            <p>Various projects of Dhaka Credit, Nadda Multi-Purpose Project consists of a Beauty parlor & Training Center, Co-Operative Shop & Hostel for the girls of indigenous communities in Bangladesh.</p>
            <p>Dhaka Credit members have entered a digitalization era. On 6th February 2021, Dhaka Credit launched its Mobile Financial Service (MFS) at the CBCB center during a workshop recently.</p>
            <p>The entire world is currently suffering from the COVID-19 crisis. Members of Dhaka Credit are also severely affected by this deadly virus, while every day thousands of people are dying. Many members lost their jobs, faced losses in their business. Responding to this emergency period, Dhaka Credit took some initiative. Among them, awareness training, leaflet and face mask distribution, discount product distribution among jobless members, commodity loans, and goods sold in credit from Samabay Bazar run by Dhaka Credit.</p>
            <p>A total of 1400 needy members obtained the discount package for BDT 1700 (equal 20 USD) which actual price is BDT 3400 (similar 40 USD) from Dhaka Credit. A total of 226 members received commodity loans. Through this timely initiative, members were greatly benefited.</p>
            <p>Lastly, on 15th May 2021, we launched a savings product, namely Pension Benefit Scheme (P.B.S). We don’t do any plans for retirement life. The P.B.S will help us make our members retirement life better and non-dependent on others. This product will help them lead a reputable retirement life.</p>
            <h6>Objectives</h6>
            <ul>
            <li>To promote the habit of thrift among its Members.</li>
            <li>To Create Fund received from members and then let them borrow these funds for their productive purpose.</li>
            <li>To Promote Self-Reliant & Mutual Benefits among the members to improve their Socio-Economic Conditions.</li>
            </ul>
            <h6>3 Year Strategic Plan</h6>
            <p>Dhaka Credit already had 6th Three-years strategic plan until now, these are as follows;</p>
            <ul>
            <li>1st 3 Year Strategic Plan (2004-2007)</li>
            <li>2nd 3 Year Strategic Plan (2008-2011)</li>
            <li>3rd 3 Year Strategic Plan (2011-2014)</li>
            <li>4th 3 Year Strategic Plan (2014-2017)</li>
            <li>5th 3 Year Strategic Plan (2017-2020)</li>
            <li>6th 3 Year Strategic Plan (2020-2023)</li>
            </ul>
            <h6>Patronized</h6>
            <p>Currently Dhaka Credit is working under these strategic plan for Financial Viability, Operational Efficiency, Member Satisfaction, Competitive Advantage Position, Employee Satisfaction, Good Co-Operative Governance.</p>
            <ul>
            <li>We patronize the Freedom Fighter of our Liberation War in 1971.</li>
            <li>Christian Businessman by Creating Christian Businessman Forum.</li>
            <li>Christian Writers through Christian Writers Forum.</li>
            <li>Christian Bankers by creating Christian Bankers Association.</li>
            <li>Children & Women For Empowerment.</li>
            <li>Encouraging & Supporting Young Leadership.</li>
            <li>Members for Entrepreneurship.</li>
            </ul>
            </div>',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 1,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Mission & Vision', '-'),
            'post_title' => 'Mission & Vision',
            'post_content' => '<div>
            <h6>Mission</h6>
            <p>Improving The Standard of Living Of Our Members By Providing Affordable & Competitive Services to Achieve Financial Viability, Operational Efficiency, Competitive Advantage Position, Member’s Satisfaction, Employee’s Satisfaction & Good Co-Operative Governance.</p>
            <h6>Vision</h6>
            <p>A <strong>SMART</strong> & Leading Co-Operative Credit Union In Bangladesh & South Asia To Attain Self-Reliant & Dignified Community.</p>
            <h6>S.M.A.R.T</h6>
            <ul>
            <li>S = Sound and Safe</li>
            <li>M = Market oriented</li>
            <li>A = A Grade</li>
            <li>R = Responsive to Members financial needs</li>
            <li>T = Trusted wealth advisor of members</li>
            </ul>
            </div>',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 1,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Core Values', '-'),
            'post_title' => 'Core Values',
            'post_content' => '<div>
            <h6>Core Values</h6>
            <ul>
            <li>We Value Our Members.</li>
            <li>Respect & Dignity.</li>
            <li>Integrity & Trust Worthiness.</li>
            <li>Professionalism.</li>
            <li>Efficiency & Excellency.</li>
            <li>Transparency & Accountability.</li>
            <li>Growth & Development.</li>
            </ul>
            </div>
            ',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 1,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Achievements', '-'),
            'post_title' => 'Achievements',
            'post_content' => '<div>
            <p>Dhaka Credit has achieved a lot through its long journey of Credit Union in Bangladesh. Apart from institutional Achievements, various National recognition has been given at various times for making important contributions to the Country’s Economy. All the achievements provide new inspirations to move forward with the dream of becoming more successful. Below are some of the achievements that were achieved by Dhaka Credit over time.</p>
            <ul>
            <li>The next big vision of Dhaka Credit is to build a Medical College & Hospital.</li>
            <li>Dhaka Credit has a State of the Art & First-Class standard Resort & Training Center at Mothbari Kuchilabari.</li>
            <li>Dhaka Credit is one of the first to provide World-Class Child Care & Education Center in Bangladesh.</li>
            <li>Dhaka Credit’s Security Services is currently one of the leading Security Service provider in Bangladesh.</li>
            <li>Dhaka Credit Union School, situated in Nadda is providing the best learning environment for the students.</li>
            <li>Establishment of Head Office and 12 area offices (Luxmibazar, Sadhonpara, Monipuripara, Mirpur, Mohakhali, Nadda, Savar, Pagar, Tumilia, Hasnabad, Shulpur & Nagori).</li>
            <li>The Credit Union was awarded the National Gold Medal for the year 1990, 1994, 1995, 1997, 2009 and 2017 by the Government Co-Operative Department as the best Co-Operative Society.</li>
            <li>Establishment of The Central Association of Christian Co-Operatives Limited (CACCO), a networking body for Christian Credit Unions, Multi-purpose Co-Operatives, Housing Societies and other financial institutions in Bangladesh. CACCO has been established on May 1st, 2007.</li>
            <li>CCULB was Established in 1979 by using education fund of this Credit Union, which is now working in Bangladesh irrespective of Religion, Cast & Creed. CCULB is the umbrella organization that provides logistics, technical support & loans among the society members.</li>
            </ul>
            </div>',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 1,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Women\'s Activity', '-'),
            'post_title' => 'Women\'s Activity',
            'post_content' => '<div>
            <p>The Women Committee of Dhaka Credit has played a significant role in promoting the progress of Dhaka Credit. Besides this, the committee has organizined various programs such as reception of students, Pre-Christmas celebrations with Mothers and Children, Bee & Smart Savers program, International Women’s Day celebration, etc for the Empowerment of Women. The Women Committee consists of nearly 360 Members.</p>
            <h6>Reasons of forming Women Committee:</h6>
            <ul>
            <li>Women Empowerment.</li>
            <li>Encouraging The Child & Women.</li>
            <li>Women Leadership.</li>
            <li>Small Entrepreneurship.</li>
            <li>Reward The Women.</li>
            <li>Relation Building.</li>
            <li>Observe National & International Days.</li>
            <li>Social Activities.</li>
            </ul>
            </div>',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 1,
        ]);


        // Deposit Products
        DB::table('posts')->insert([
            'post_slug' => Str::slug('Savings Account', '-'),
            'post_title' => 'Savings Account',
            'post_content' => '<div>
            <p>Savings is an important aspect of life for each and everyone and one can never fully prepare for the financial requirement that may arises for any situation.</p>
            <h6>Features</h6>
            <ul>
            <li>Minimum Deposit: 10/- per month.</li>
            <li>Interest Rate: 3% Per Annum.</li>
            <li>Dhaka Credit’s daily accrued half-yearly interest.</li>
            <li>Full membership after 3 months of successful operations.</li>
            <li>Any amount can be deposited or withdrawn at any time.</li>
            </ul>
            <h6>Requirements</h6>
            <ul>
            <li>2 Stamp size color photos, Baptism certificate & Birth certificate or NID.</li>
            <li>Christian individuals of any age, living in Dhaka, Gazipur, Narayanganj and Munshiganj District.</li>
            <li>Saving account is mandatory for other types of accounts also.</li>
            </ul>
            </div>',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Credit Account', '-'),
            'post_title' => 'Credit Account',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('STD Account', '-'),
            'post_title' => 'STD Account',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Bee Savers', '-'),
            'post_title' => 'Bee-Savers',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Smart Savers', '-'),
            'post_title' => 'Smart Savers',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Education Savings', '-'),
            'post_title' => 'Education Savings',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('LTSD Account', '-'),
            'post_title' => 'LTSD Account',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Monthly Savings', '-'),
            'post_title' => 'Monthly Savings',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Festival Savings', '-'),
            'post_title' => 'Festival Savings',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Troimashik Savings', '-'),
            'post_title' => 'Troimashik Savings',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Aged Savings', '-'),
            'post_title' => 'Aged Savings',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Double Deposit', '-'),
            'post_title' => 'Double Deposit',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Millionaire Deposit', '-'),
            'post_title' => 'Millionaire Deposit',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Housing Deposit', '-'),
            'post_title' => 'Housing Deposit',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Marriage Deposit', '-'),
            'post_title' => 'Marriage Deposit',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('KotiPoti Deposit', '-'),
            'post_title' => 'KotiPoti Deposit',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Hospital Bond', '-'),
            'post_title' => 'Hospital Bond',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('D.C. H.C.S', '-'),
            'post_title' => 'D.C. H.C.S',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Pension Benefit', '-'),
            'post_title' => 'Pension Benefit',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 2,
        ]);




        // Loan Products
        DB::table('posts')->insert([
            'post_slug' => Str::slug('General Loan', '-'),
            'post_title' => 'General Loan',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Business Loan', '-'),
            'post_title' => 'Business Loan',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('SMB Loan', '-'),
            'post_title' => 'SMB Loan',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Car Loan', '-'),
            'post_title' => 'Car Loan',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Metro H.Building', '-'),
            'post_title' => 'Metro H.Building',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Flat Purchase', '-'),
            'post_title' => 'Flat Purchase',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('House Building Loan', '-'),
            'post_title' => 'House Building Loan',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Credit Ceiling Loan', '-'),
            'post_title' => 'Credit Ceiling Loan',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Industrial Loan', '-'),
            'post_title' => 'Industrial Loan',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Capacity Based Loan', '-'),
            'post_title' => 'Capacity Based Loan',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('General CC Loan', '-'),
            'post_title' => 'General CC Loan',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('For Going Abroad', '-'),
            'post_title' => 'For Going Abroad',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Solvency For Higher Education', '-'),
            'post_title' => 'Solvency For Higher Education',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Top Up', '-'),
            'post_title' => 'Top Up',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Bill Pay Loan', '-'),
            'post_title' => 'Bill Pay Loan',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Higher Education', '-'),
            'post_title' => 'Higher Education',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Higher Education Support', '-'),
            'post_title' => 'Higher Education Support',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Professional Training', '-'),
            'post_title' => 'Professional Training',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Consumer Loan', '-'),
            'post_title' => 'Consumer Loan',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('D.C Gym Loan', '-'),
            'post_title' => 'D.C Gym Loan',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Loan Against LTSD', '-'),
            'post_title' => 'Loan Against LTSD',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Open Installment', '-'),
            'post_title' => 'Open Installment',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Own Share Loan', '-'),
            'post_title' => 'Own Share Loan',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Secured Over Draft', '-'),
            'post_title' => 'Secured Over Draft',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('D.C Flat Purchase Loan', '-'),
            'post_title' => 'D.C Flat Purchase Loan',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Emergency Loan', '-'),
            'post_title' => 'Emergency Loan',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Competency Based Loan', '-'),
            'post_title' => 'Competency Based Loan',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Instant Loan', '-'),
            'post_title' => 'Instant Loan',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Double Loan on FDR', '-'),
            'post_title' => 'Double Loan on FDR',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 3,
        ]);



        // Services
        DB::table('posts')->insert([
            'post_slug' => Str::slug('24×7 ATM Service', '-'),
            'post_title' => '24×7 ATM Service',
            'post_content' => '<div>
            <p>
                Every organisation have a dream of achieving something ambitious during
                its operation. Dhaka Credit’s One of those ambitious dream was to be the
                first Credit Union in Bangladesh to successfully launch 24×7 ATM service
                for its customers. Facilities with State-of-the-Art Technology and
                Security that can rival the services provided by the Banks which are
                provided to our esteemed & valuable members with services designed
                specially for the convenience of our members.
            </p>
            <p>Some of the highlighting features are mentioned below:</p>
            <h6>Features</h6>
            <ul>
                <li>State – of – the – Art Technology.</li>
                <li>Credit & Debit Card Features for our valuable members.</li>
                <li>
                    Different Grade of Card based on the limit of the member, Such as
                    Silver, Gold & Platinum.
                </li>
                <li>
                    ATM Booth is open for 24 Hours a Day, 7 Days a Week & 365 Days a
                    Year.
                </li>
                <li>
                    Withdraw cash instantly by avoiding waiting time through the use of
                    Cheque.
                </li>
                <li>
                    The ATM’s are located in the following locations for the members
                </li>
            </ul>
            <h6>Convenience:</h6>
            <ul>
                <li>Head Office</li>
                <li>Shadhonpara</li>
                <li>Monipuripara</li>
                <li>Nadda</li>
                <li>Mirpur</li>
                <li>Savar</li>
                <li>Hasnabad</li>
                <li>Nagori</li>
                <li>Pagar</li>
                <li>John Vianney Hospital</li>
            </ul>
        </div>
        ',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 4,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Beauty Parlor', '-'),
            'post_title' => 'Beauty Parlor',
            'post_content' => '<div>
            <p>
                With Wedding season fast approaching, the demand for High Quality
                Service and Expert Beautician will be huge. To take the advantage of
                this situation, Dhaka Credit has recently launched its very own Beauty
                Parlor for its valuable members. The Beauty parlor has all the necessary
                products and equipment required to rival the best of beauty parlors in
                Dhaka city.
            </p>
            <p>Some of the main highlighting features are mentioned below:</p>
            <h6>Features</h6>
            <ul>
                <li>Beautician with World Class Expertise.</li>
                <li>
                    Branded and High Quality Make up products and sophisticated
                    equipment that will suit every needs of our valuable customers.
                </li>
            </ul>
            <div>
                <h6>For More Information, Please Contact Us:</h6>
                <p>
                    Address: Ka-29/A, Nadda Sarkerbari (Near Sarkerbari Mosque),
                    Gulshan-2, Dhaka-1212
                </p>
                <p>Call: 01709993097</p>
            </div>
        </div>
        ',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 4,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Cultural Academy', '-'),
            'post_title' => 'Cultural Academy',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 4,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Security Services', '-'),
            'post_title' => 'Security Services',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 4,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Doctor’s Chamber', '-'),
            'post_title' => 'Doctor’s Chamber',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 4,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Ambulance Service', '-'),
            'post_title' => 'Ambulance Service',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 4,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Gym', '-'),
            'post_title' => 'Gym',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 4,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('D.C Online TV', '-'),
            'post_title' => 'D.C Online TV',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 4,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('D.C Online News', '-'),
            'post_title' => 'D.C Online News',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 4,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('D.C App M.M.S', '-'),
            'post_title' => 'D.C App M.M.S',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 4,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Other Services', '-'),
            'post_title' => 'Other Services',
            'post_content' => '',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 4,
        ]);



        // Projects
        DB::table('posts')->insert([
            'post_slug' => Str::slug('D.C Child Care', '-'),
            'post_title' => 'D.C Child Care',
            'post_content' => '<div>
            <p>
                Dhaka Credit’s Child Care & Education Center is a unique addition to
                Dhaka Credit as it promotes quality education & Child-Friendly
                Environment for the children and make life easier for the working women
                and young couples. Dhaka credit is the 1st World Class Child Care &
                Education Center in Bangladesh & it is open for all. So visit the
                Campus, experience the Professional Services and decide your child’s
                future towards a brighter future.
            </p>
            <h6>Vision</h6>
            <p>
                Our Vision is to create a second home for our precious children, where
                their growing needs are fulfilled in a safe, healthy & Creative
                environment.
            </p>
            <h6>Mission</h6>
            <p>
                The Mission is to provide a creative environment for optimal growth and
                development of the child.
            </p>
            <h6>Objective</h6>
            <ul>
                <li>A relief for New Couple and Working Women</li>
                <li>Provide children with world-Class Education standard</li>
                <li>
                    Create a Safe & Sustainable Educational Environment for the children
                </li>
                <li>
                    Providing the children with the right education that they require.
                </li>
                <li>Providing the service at a very competitive cost.</li>
                <li>And above all, Developing future generations of our nation.</li>
            </ul>
            <h6>Privilege</h6>
            <ul>
                <li>Very Competitive Price</li>
                <li>Indoor & Outdoor Activities.</li>
                <li>Nutritious & Healthy Food</li>
                <li>Food item is prepared by Expert Nutritionists.</li>
                <li>
                    Proper Dinning and Sleeping arrangements specially designed for
                    children.
                </li>
            </ul>
            <h6>Education</h6>
            <ul>
                <li>Language inside the center is English.</li>
                <li>Curriculum based on Cambridge Pre-School</li>
                <li>Air-Conditioned Class Room</li>
                <li>Child-Friendly Toys for the children.</li>
                <li>24hrs C.C Camera Monitoring.</li>
                <li>Fully Secured for the children.</li>
            </ul>
            <h6>Teacher</h6>
            <ul>
                <li>Our teachers are specially trained from Singapore.</li>
                <li>Guidance under expert adviser from Singapore.</li>
            </ul>
            <div>
                <h6>For More Information, Please Contact Us</h6>
                <p>88/5, MonipuriPara, Gate No: 4, Tejgaon, Dhaka-1215.</p>
                <p>Fax: 88-02-9143079.</p>
                <p>Dial:01709-815484</p>
                <p>Extension No: 967877-2231</p>
                <p>Email: dc_childcare@cccul.com, info@cccul.com,</p>
                <p>Facebook: www.facebook.com/dhakacreditchildcare/</p>
            </div>
        </div>
        ',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 5,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('D.C School', '-'),
            'post_title' => 'D.C School',
            'post_content' => '<div>
            <h6>DHAKA CREDIT UNION SCHOOL</h6>
            <p>
                School is one of the most important aspects of any society as they
                nurture and develop the potential bright futures of our society. Dhaka
                Credit Union School was established in 2009 along with 16 students the
                school started its journey. Currently the number of students is more
                than 300. The school is spreading the light of knowledge in the
                surrounding areas of Nadda & Bashundhara of Dhaka. On 26th Feb, 2017,
                the school has moved to a new building. With the passage of time, the
                school is becoming more popular among the people of the community.
            </p>
            <h6>Features</h6>
            <ul>
                <li>
                    Dhaka Credit Union School was established in 2009 for students
                    irrespective of their religion, with the mission to maintain a
                    standard of education.
                </li>
                <li>
                    Monthly tuition fees for the students are fixed at a reasonable
                    cost.
                </li>
                <li>
                    Presently the school provides classes from Nursery to class VIII
                    (8).
                </li>
                <li>Currently the total number of students is nearly 300 plus.</li>
                <li>
                    There is a future plan to upgrade the school to college and
                    consecutively university as well.
                </li>
                <li>Professional Teaching Method & Well Experienced Teachers</li>
            </ul>
            <h6>Extra-Curriculum Activities</h6>
            <ul>
                <li>Cultural Practice.</li>
                <li>Science Club.</li>
                <li>English Club.</li>
                <li>Debating Club.</li>
                <li>Student Counseling.</li>
                <li>Game & Sports.</li>
                <li>Primary Medical Education.</li>
                <li>Academic Tour.</li>
                <li>Spelling Bee.</li>
                <li>Art.</li>
                <li>Dictation.</li>
            </ul>
            <div>
                <h6>For More Information, Contact Us</h6>
                <p>Call: 01709-815485</p>
                <p>Address: Ka-30/A/2, Joar Sahara, Nadda, Dhaka.</p>
                <p>Email: info@cccul.com</p>
            </div>
        </div>
        ',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 5,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Girl’s Hostel', '-'),
            'post_title' => 'Girl’s Hostel',
            'post_content' => '<div>
            <h6>Girl’s Hostel</h6>
            <p>
                Dhaka Credit is operating three Girl’s Hostel for the female students
                who are coming from villages for higher studies and career in Dhaka
                City. These students often face problems due to crisis of accommodation
                with reasonably low cost in the city. To tackle this problems, Dhaka
                Credit is using its buildings in Shadhonpara, Monipuripara & Nadda to
                provide accommodation to these students. These hostels provide
                comfortable accommodation, comparatively low cost, standard meals,
                skilled management & 24hrs security with cc camera. The Hostel is
                conveniently located near the main Public transportation Hub of the
                city.
            </p>
            <h4>*****Eligibility: Only Christian Female Students can apply*****</h4>
            <h6>Features</h6>
            <ul>
                <li>Excellent Environment.</li>
                <li>Plenty of Space</li>
                <li>Healthy and Standard Meal</li>
                <li>C.C Camera Security</li>
                <li>Safe & Secured</li>
                <li>Comparatively Low Cost</li>
            </ul>
            <h6>Hostel Facilities</h6>
            <ul>
                <li>Separate Study room.</li>
                <li>Separate Dining room.</li>
                <li>Daily Newspaper.</li>
                <li>Lift with Generator Support(Only in Monipuripara).</li>
                <li>Computer Room.</li>
                <li>Cable Connection.</li>
                <li>Always Water Availability</li>
            </ul>
            <div>
                <h6>MonipuriPara Hostel</h6>
                <p>Hostel Fee: BDT 4,630</p>
                <p>Address: 88/5, MonipuriPara, Gate-4 Tejgaon, Dhaka-1215</p>
                <p>Call: 01718-477702</p>
                <p>Email: info@cccul.com</p>
            </div>
            <div>
                <h6>SadhonPara Hostel</h6>
                <p>Hostel Fee: BDT 3,770</p>
                <p>Address: 8/Kha, ShadhonPara East Rajabazar, Dhaka- 1215</p>
                <p>Call: 01715-440437</p>
                <p>Email: info@cccul.com</p>
            </div>
            <div>
                <h6>Nadda Hostel</h6>
                <p>Hostel Fee: BDT 3,500</p>
                <p>Address: Ka-29/A, Nadda Sarkerbari Gulshan-2, Dhaka-1212</p>
                <p>Call: 01674-110964</p>
                <p>Email: info@cccul.com</p>
            </div>
        </div>
        ',
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 5,
        ]);


        // // Notifications
        // DB::table('posts')->insert([
        //     'post_slug' => Str::slug('', '-'),
        //     'post_title' => '',
        //     'post_content' => '',
        //     'post_image' => '/public/cat.jpg',
        //     'post_type_id' => 6,
        // ]);


        // // News
        // DB::table('posts')->insert([
        //     'post_slug' => Str::slug('', '-'),
        //     'post_title' => '',
        //     'post_content' => '',
        //     'post_image' => '/public/cat.jpg',
        //     'post_type_id' => 7,
        // ]);



        // // Policies
        // DB::table('posts')->insert([
        //     'post_slug' => Str::slug('', '-'),
        //     'post_title' => '',
        //     'post_content' => '',
        //     'post_image' => '/public/cat.jpg',
        //     'post_type_id' => 8,
        // ]);


        // // AGM Report
        // DB::table('posts')->insert([
        //     'post_slug' => Str::slug('', '-'),
        //     'post_title' => '',
        //     'post_content' => '',
        //     'post_image' => '/public/cat.jpg',
        //     'post_type_id' => 9,
        // ]);



        try {
            Post::factory(250)->create();
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
