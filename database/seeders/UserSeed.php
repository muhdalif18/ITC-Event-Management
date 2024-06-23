<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('users')->insert([
      'name' => 'ADMIN',
      'email' => 'informationtechnologyclub2@gmail.com',
      'role' => 'admin',
      'matric_number' => 'test',
      'exco' => 'test',
      'password' => Hash::make('12345678'),
    ]);

    DB::table('users')->insert([
      'name' => 'MUHAMMAD HAQIMI BIN HARUN',
      'email' => 'ci210003@student.uthm.edu.my',
      'role' => 'user',
      'matric_number' => 'ci210003',
      'exco' => 'EXCO PEMBANGUNAN PELAJAR',
      'password' => Hash::make('12345678'),
    ]);

    DB::table('users')->insert([
      'name' => 'UTHMANN AL-SYURAEEM BIN AL-HADI',
      'email' => 'ci210001@student.uthm.edu.my',
      'role' => 'user',
      'matric_number' => 'ci210001',
      'exco' => 'EXCO MEDIA',
      'password' => Hash::make('12345678'),
    ]);

    DB::table('users')->insert([
      'name' => 'AIMAN SYAFIQ BIN TAHRIM',
      'email' => 'ci210032@student.uthm.edu.my',
      'role' => 'user',
      'matric_number' => 'ci210032',
      'exco' => 'EXCO MEDIA',
      'password' => Hash::make('12345678'),
    ]);

    DB::table('users')->insert([
      'name' => 'ADIB NAWFAL BIN YAZID',
      'email' => 'ci210094@student.uthm.edu.my',
      'role' => 'user',
      'matric_number' => 'ci210094',
      'exco' => 'EXCO SUKAN DAN REKREASI',
      'password' => Hash::make('12345678'),
    ]);

    DB::table('users')->insert([
      'name' => 'MUHAMMAD AIZUDDIN BIN ZULKIFLI',
      'email' => 'ci210067@student.uthm.edu.my',
      'role' => 'user',
      'matric_number' => 'ci210067',
      'exco' => 'EXCO SUKAN DAN REKREASI',
      'password' => Hash::make('12345678'),
    ]);

    DB::table('event_proposals')->insert([
      'purpose' => 'Tujuan kertas kerja ini adalah untuk memohon pertimbangan dan kelulusan Yang Dipertua Majlis Perwakilan Pelajar mengenai cadangan program AWS CLOUD ESSENTIALS FOR LEARNERS ',
      'background' => 'Komputasi awan, merujuk pada model penyediaan layanan komputasi melalui internet. Ini menggantikan model tradisional di mana sumber daya komputasi seperti server, dan penyimpanan data yang biasanya dikelola dan dioperasikan di lokasi fizikal yang dimiliki atau disewa oleh organisasi. Dalam komputasi awan, penyedia layanan seperti Amazon Web Services (AWS), menyediakan akses ke infrastruktur dan layanan IT mereka melalui internet. Komputasi awan digunakan secara luas dalam berbagai aplikasi, termasuk hosting laman web, pengolahan data, pengembangan perangkat lunak, kecerdasan buatan, Internet of Things (IoT), dan banyak lagi.

AWS membenarkan organisasi dan individu untuk menyewa sumber daya komputasi, penyimpanan, jaringan, dan berbagai layanan lainnya secara fleksibel melalui internet. Komputasi awan juga diantara sistem komputasi yang banyak digunakan untuk Projek Sarjana Muda (PSM) bagi mahasiswa Fakulti Sains Komputer Dan Teknologi Maklumat. Namun begitu, mahasiswa masih kurang terdedah dengan kegunaan komputasi awan kerana kepelbagaian rujukan, gaya pemahaman yang beredar di internet. Oleh itu,cadangan program AWS CLOUD ESSENTIALS FOR LEARNERS diusulkanbagi membantu mahasiswa dan staff dalam meningkatkan kemahiran dan pengetahuan mereka berkenaan komputasi awan dan memudahkan merekadalam membangunkan sistem bagi PSM mereka kelak. Diharapkan selaras dengan penganjuran program ini dapat meningkatkan kebolehpasaran graduan dan membuka peluang kepada mahasiswa untuk meningkatkan kemahiran insaniah serta menilai kebolehan kerjaya, pengetahuan dan keyakinan diri mahasiswa itu sendiri. ',
      'organizer' => 'KELAB TEKNOLOGI MAKLUMAT (ITC), FAKULTI SAINS KOMPUTER DAN TEKNOLOGI MAKLUMAT, DENGAN KERJASAMA PERBADANAN EKONOMI DIGITAL MALAYSIA (MDEC)  ',
      'eventName' => 'AWS CLOUD ESSENTIALS FOR LEARNERS ',
      'organizer_exco' => 'Exco Pembangunan Pelajar',
      'event_director' => 'Syed Muhamad Alif',
      'date' => '09 DISEMBER 2023 ',
      'day' => 'SABTU',
      'time' => '9:00 pagi sehingga 12:00 tengah hari ',
      'location' => 'DEWAN KULIAH 3, PERPUSTAKAAN TUNKU TUN AMINAH, UNIVERSITI TUN HUSSEIN ONN MALAYSIA ',
      'objective1' => 'Memberikan pengenalan kepada para peserta berkenaan dengan kegunaan komputasi awan untuk yang merupakan salah satu platform yang hebat dan mempunyai komuniti pengguna yang ramai.',
      'objective2' => 'Memberikan pendedahan kepada para peserta dalam menggunakan fungsi-fungsi yang tersedia di AWS Cloud dan memaksimumkan pengetahuan serta pengalaman dalam penggunaan komputasi awan. ',
      'objective3' => 'Membantu para peserta untuk meningkatkan kemahiran penggunaan komputasi awan untuk keperluan mereka dalam melaksanakan Projek Sarjana Muda (PSM) bagi kursus yang ditawarkan oleh Fakulti Sains Komputer dan Teknologi Maklumat. ',
      'per_Masalah1' => 'Peserta sukarnya untuk mempelajari AWS disebabkan kepelbagaian rujukan, gaya pemahaman dan penguasaan yang lemah dalam kegunaan komputasi awan. ',
      'per_Masalah2' => 'Mahasiswa kurangnya pengetahuan mengenai teknologi terkini yang boleh digunakan dalam komputasi awan yang secara amnya banyak digunakan dalam industri namun kurang di dedahkan dalam silibus pengajaran universiti.',
      'per_Masalah3' => 'Mahasiswa masih di tahap pemula dalam kemahiran komputasi awan bagi Projek Sarjana Muda (PSM) mereka kerana kurangnya pemahaman dan latihan, serta kepelbagaian platform yang berada di industri yang membuat mereka keliru untuk memilih platform yang bersesuaian. ',
      'participant_escorts' => 'Peserta adalah dalam kalangan staff dan mahasiswa UTHM khususnya Mahasiswa Tahun Akhir Fakulti Sains Komputer dan Teknologi Maklumat.',
      'name_of_mentor' => 'Ms Valerie Leong',
      'position_of_mentor' => 'Field Program Manager',
      'company_address' => 'Malaysia Digital Economy Corporation (MDEC) Sdn. Bhd.  
2360 Persiaran APEC
63000 Cyberjaya
Selangor Darul Ehsan. ',
      'suggested_role' => 'Tiada',
      'impact_student_1' => 'Melahirkan individu yang mempunyai pengetahuan tinggi mengenai komputasi awan yang merupakan salah satu sistem komputasi yang terkenal dan meluas digunakan dalam industri.',
      'impact_student_2' => 'Meningkatkan kefahaman staff dan mahasiswa mengenai fungsi-fungsi yang tersedia di AWS di samping membantu mahasiswa yang ingin menggunakan komputasi awan bagi Projek Sarjana Muda (PSM) mereka.',
      'impact_student_3' => 'Meningkatkan motivasi dan inspirasi mahasiswa untuk mahir dan meningkatkan pengetahuan dalam komputasi awan.',
      'toward_club_1' => 'Menjalankan fungsi kelab sebagai pusat pembangunan mahasiswa yang berkaliber dan berpengetahuan luas.',
      'toward_club_2' => 'Merealisasikan fungsi UTHM sebagai sebuah destinasi ilmu yang holistik selaras dengan misi UTHM iaitu menyediakan penyelesaian teknikal untuk keperluan industri dan komuniti berasaskan paradigma tauhid.',
      'toward_club_3' => 'Mengeratkan hubungan dua hala diantara pihak alumni, pihak fakulti dan mahasiswa. ',
      'committee_members' => ' [{"name": "SYED MUHAMAD ALIF BIN SYED MOHD", "role": "Pengarah", "matric": "CI210009", "faculty": "FSKTM"}, {"name": "NOOR HAZWALYENA BINTI HASSAN", "role": "Bendahari ", "matric": "AI210284 ", "faculty": "FSKTM"}, {"name": "NUR SAZLIN SYAFIKA BINTI MAZLAN", "role": "Unit Protokol", "matric": "DI210085", "faculty": "FSKTM"}, {"name": "NURALYANA MAISARA BINTI NOORISHAM", "role": "Unit Protokol", "matric": "AI220222", "faculty": "FSKTM"}, {"name": "MUHAMMAD IZZUDDIN BIN MOHSIN", "role": "Unit Pendaftaran", "matric": "DI210098", "faculty": "FSKTM"}, {"name": "HEMASRRI A/P MUNIANDY", "role": "Unit Pendaftaran", "matric": "DI220032", "faculty": "FSKTM"}, {"name": "MOHAMED HAZIZI BIN HAMDAN", "role": "Unit Teknikal Dan Tugas Khas", "matric": "CI210054", "faculty": "FSKTM"}]',
      'tentative_activity' => '[{"time": "8:30 am – 8:45 am", "content": "Pendaftaran peserta"}, {"time": "8:45 am – 8:55 am", "content": "Majlis pembukaan bengkel"}, {"time": "9:00 am – 10:30 am", "content": "Pengenalan kepada AWS Cloud"}, {"time": "10:30 am – 11:00 am", "content": "Minum Pagi"}, {"time": "11:00 am – 12:00 pm", "content": "AWS Cloud Essentials"}, {"time": "12:00 pm – 12:10", "content": "Penyampaian cenderahati"}, {"time": "12.15 pm", "content": "Bersurai"}]',
      'others' => 'Penganjuran aktiviti ini memerlukan penggunaan kemudahan universiti iaitu extension, projector, PA sistem bagi kelancaran program. ',
      'implication' => 'Implikasi sekiranya program ini ditolak maka hasrat untuk memberikan pengenalan kepada para peserta untuk meningkatkan kemahiran berkenaan komputasi awan yang merupakan salah satu platform yang hebat dan mempunyai komuniti pengguna yang ramai tidak dapat dilaksanakan. Selain itu, hasrat untuk memberikan pendedahan kepada para peserta dalam menggunakan fungsi-fungsi yang tersedia di AWS dan memaksimumkan pengetahuan serta pengalaman dalam penggunaan AWS tidak dapat dijayakan di samping hasrat untuk mem bantu para peserta untuk memperoleh kemahiran yang diperlukan bagi membangunkan projek untuk keperluan mereka dalam melaksanakan Projek Sarjana Muda (PSM) bagi kursus yang ditawarkan oleh Fakulti Sains Komputer dan Teknologi Maklumat. ',
      'decision' => 'Dengan segala hormatnya Yang Dipertua Majlis Perwakilan Pelajar adalah dipohon untuk menimbang serta meluluskan kertas kerja mengenai cadangan program AWS CLOUD ESSENTIALS FOR LEARNERS',
    ]);

    DB::table('event_reports')->insert([
      'purpose' => 'Tujuan kertas kerja ini adalah untuk memohon pertimbangan dan kelulusan Yang Dipertua Majlis Perwakilan Pelajar mengenai cadangan program AWS CLOUD ESSENTIALS FOR LEARNERS ',
      'background' => 'Komputasi awan, merujuk pada model penyediaan layanan komputasi melalui internet. Ini menggantikan model tradisional di mana sumber daya komputasi seperti server, dan penyimpanan data yang biasanya dikelola dan dioperasikan di lokasi fizikal yang dimiliki atau disewa oleh organisasi. Dalam komputasi awan, penyedia layanan seperti Amazon Web Services (AWS), menyediakan akses ke infrastruktur dan layanan IT mereka melalui internet. Komputasi awan digunakan secara luas dalam berbagai aplikasi, termasuk hosting laman web, pengolahan data, pengembangan perangkat lunak, kecerdasan buatan, Internet of Things (IoT), dan banyak lagi.

AWS membenarkan organisasi dan individu untuk menyewa sumber daya komputasi, penyimpanan, jaringan, dan berbagai layanan lainnya secara fleksibel melalui internet. Komputasi awan juga diantara sistem komputasi yang banyak digunakan untuk Projek Sarjana Muda (PSM) bagi mahasiswa Fakulti Sains Komputer Dan Teknologi Maklumat. Namun begitu, mahasiswa masih kurang terdedah dengan kegunaan komputasi awan kerana kepelbagaian rujukan, gaya pemahaman yang beredar di internet. Oleh itu,cadangan program AWS CLOUD ESSENTIALS FOR LEARNERS diusulkanbagi membantu mahasiswa dan staff dalam meningkatkan kemahiran dan pengetahuan mereka berkenaan komputasi awan dan memudahkan merekadalam membangunkan sistem bagi PSM mereka kelak. Diharapkan selaras dengan penganjuran program ini dapat meningkatkan kebolehpasaran graduan dan membuka peluang kepada mahasiswa untuk meningkatkan kemahiran insaniah serta menilai kebolehan kerjaya, pengetahuan dan keyakinan diri mahasiswa itu sendiri. ',
      'organizer' => 'KELAB TEKNOLOGI MAKLUMAT (ITC), FAKULTI SAINS KOMPUTER DAN TEKNOLOGI MAKLUMAT, DENGAN KERJASAMA PERBADANAN EKONOMI DIGITAL MALAYSIA (MDEC)  ',
      'eventName' => 'AWS CLOUD ESSENTIALS FOR LEARNERS ',
      'organizer_exco' => 'Exco Pembangunan Pelajar',
      'event_director' => 'Syed Muhamad Alif',
      'date' => '09 DISEMBER 2023 ',
      'day' => 'SABTU',
      'time' => '9:00 pagi sehingga 12:00 tengah hari ',
      'location' => 'DEWAN KULIAH 3, PERPUSTAKAAN TUNKU TUN AMINAH, UNIVERSITI TUN HUSSEIN ONN MALAYSIA ',
      'objective1' => 'Memberikan pengenalan kepada para peserta berkenaan dengan kegunaan komputasi awan untuk yang merupakan salah satu platform yang hebat dan mempunyai komuniti pengguna yang ramai.',
      'objective2' => 'Memberikan pendedahan kepada para peserta dalam menggunakan fungsi-fungsi yang tersedia di AWS Cloud dan memaksimumkan pengetahuan serta pengalaman dalam penggunaan komputasi awan. ',
      'objective3' => 'Membantu para peserta untuk meningkatkan kemahiran penggunaan komputasi awan untuk keperluan mereka dalam melaksanakan Projek Sarjana Muda (PSM) bagi kursus yang ditawarkan oleh Fakulti Sains Komputer dan Teknologi Maklumat. ',
      'per_Masalah1' => 'Peserta sukarnya untuk mempelajari AWS disebabkan kepelbagaian rujukan, gaya pemahaman dan penguasaan yang lemah dalam kegunaan komputasi awan. ',
      'per_Masalah2' => 'Mahasiswa kurangnya pengetahuan mengenai teknologi terkini yang boleh digunakan dalam komputasi awan yang secara amnya banyak digunakan dalam industri namun kurang di dedahkan dalam silibus pengajaran universiti.',
      'per_Masalah3' => 'Mahasiswa masih di tahap pemula dalam kemahiran komputasi awan bagi Projek Sarjana Muda (PSM) mereka kerana kurangnya pemahaman dan latihan, serta kepelbagaian platform yang berada di industri yang membuat mereka keliru untuk memilih platform yang bersesuaian. ',
      'participant_escorts' => 'Peserta adalah dalam kalangan staff dan mahasiswa UTHM khususnya Mahasiswa Tahun Akhir Fakulti Sains Komputer dan Teknologi Maklumat.',
      'name_of_mentor' => 'Ms Valerie Leong',
      'position_of_mentor' => 'Field Program Manager',
      'company_address' => 'Malaysia Digital Economy Corporation (MDEC) Sdn. Bhd.  
2360 Persiaran APEC
63000 Cyberjaya
Selangor Darul Ehsan. ',
      'suggested_role' => 'Tiada',
      'impact_student_1' => 'Melahirkan individu yang mempunyai pengetahuan tinggi mengenai komputasi awan yang merupakan salah satu sistem komputasi yang terkenal dan meluas digunakan dalam industri.',
      'impact_student_2' => 'Meningkatkan kefahaman staff dan mahasiswa mengenai fungsi-fungsi yang tersedia di AWS di samping membantu mahasiswa yang ingin menggunakan komputasi awan bagi Projek Sarjana Muda (PSM) mereka.',
      'impact_student_3' => 'Meningkatkan motivasi dan inspirasi mahasiswa untuk mahir dan meningkatkan pengetahuan dalam komputasi awan.',
      'toward_club_1' => 'Menjalankan fungsi kelab sebagai pusat pembangunan mahasiswa yang berkaliber dan berpengetahuan luas.',
      'toward_club_2' => 'Merealisasikan fungsi UTHM sebagai sebuah destinasi ilmu yang holistik selaras dengan misi UTHM iaitu menyediakan penyelesaian teknikal untuk keperluan industri dan komuniti berasaskan paradigma tauhid.',
      'toward_club_3' => 'Mengeratkan hubungan dua hala diantara pihak alumni, pihak fakulti dan mahasiswa. ',
      'committee_members' => ' [{"name": "SYED MUHAMAD ALIF BIN SYED MOHD", "role": "Pengarah", "matric": "CI210009", "faculty": "FSKTM"}, {"name": "NOOR HAZWALYENA BINTI HASSAN", "role": "Bendahari ", "matric": "AI210284 ", "faculty": "FSKTM"}, {"name": "NUR SAZLIN SYAFIKA BINTI MAZLAN", "role": "Unit Protokol", "matric": "DI210085", "faculty": "FSKTM"}, {"name": "NURALYANA MAISARA BINTI NOORISHAM", "role": "Unit Protokol", "matric": "AI220222", "faculty": "FSKTM"}, {"name": "MUHAMMAD IZZUDDIN BIN MOHSIN", "role": "Unit Pendaftaran", "matric": "DI210098", "faculty": "FSKTM"}, {"name": "HEMASRRI A/P MUNIANDY", "role": "Unit Pendaftaran", "matric": "DI220032", "faculty": "FSKTM"}, {"name": "MOHAMED HAZIZI BIN HAMDAN", "role": "Unit Teknikal Dan Tugas Khas", "matric": "CI210054", "faculty": "FSKTM"}]',
      'tentative_activity' => '[{"time": "8:30 am – 8:45 am", "content": "Pendaftaran peserta"}, {"time": "8:45 am – 8:55 am", "content": "Majlis pembukaan bengkel"}, {"time": "9:00 am – 10:30 am", "content": "Pengenalan kepada AWS Cloud"}, {"time": "10:30 am – 11:00 am", "content": "Minum Pagi"}, {"time": "11:00 am – 12:00 pm", "content": "AWS Cloud Essentials"}, {"time": "12:00 pm – 12:10", "content": "Penyampaian cenderahati"}, {"time": "12.15 pm", "content": "Bersurai"}]',
      'others' => '[{"image_path":"others_images\/4GiwWcYm4JLMib59RDYmZqUdU4oQFo4DFQ8ahiZc.jpg","caption":"Rajah 1: Sesi perkongsian oleh panel"},{"image_path":"others_images\/VAvKFatMO2vrKtkkRmYBmNKkp3BvUXqeL5xGBxL5.jpg","caption":"Rajah 2 : Peserta Program AWS Cloud Essential For Learners"},{"image_path":"others_images\/atslP8K05VZlPZyz7OAElFZrB10tTWraJ3i4RZzf.jpg","caption":"Rajah 3: Sesi bergambar bersama panel dan MDEC"},{"image_path":"others_images\/x8jTXMu7bigzl6uOLFkFogUKr3PmWP4tlNTJj3ut.jpg","caption":"Rajah 4 : Sesi bergambar bersama panel, MDEC dan peserta Program AWS Cloud Essentials For Learners"}]',
      'implication' => 'Perjalanan bagi keseluruhan program yang berlangsung pada 9 Disember 2023 jam  9.00 pagi sehingga 12.00 tengah hari telah berjaya dilaksanakan dengan berjaya.  Seperti mana hasrat program ini dijalankan iaitu untuk melahirkan individu yang mempunyai pengetahuan tinggi mengenai komputasi awan yang merupakan salah  satu sistem komputasi yang terkenal dan meluas digunakan dalam industri serta  meningkatkan kefahaman staff dan mahasiswa mengenai fungsi-fungsi yang tersedia  di AWS di samping membantu mahasiswa yang ingin menggunakan komputasi awan  bagi Projek Sarjana Muda (PSM) mereka dan meningkatkan motivasi dan inspirasi  mahasiswa untuk mahir dan meningkatkan pengetahuan dalam komputasi awan.  Segala hebahan berkenaan program ini dilakukan dengan menggunakan media sosial  seperti WhatsApps, Facebook dan Instagram. Bantuan daripada Timbalan Dekan Hal  Ehwal Pelajar FSKTM juga diterima bagi mempromosikan lagi program ini.  Penggunaan infografik seperti poster dan ayat hebahan yang menarik dan mudah  difahami dapat menarik minat pelajar yang akan menjalani latihan industri untuk menyertai program ini.',
      'decision' => 'Dengan segala hormatnya Yang Dipertua Majlis Perwakilan Pelajar adalah dipohon untuk mengambil maklum mengenai LAPORAN AWS CLOUD ESSENTIAL FOR LEARNERS .',
      'club_president' => 'Khairunnisa Diyanah Binti Ab Musa ',
      'club_advisor' => 'Puan Suriawati Binti Suparjoh',
      'mpp' => 'Amirah ‘Azizah Binti Badrul Hisham',
    ]);

    /* DB::table('event_proposals')->insert([
      'purpose' => 'ABCD',
      'background' => 'ABCD',
      'eventName' => 'ABCD',
      'organizer' => 'ABCD',
      'organizer_exco' => 'ZXCV',
      'event_director' => 'VBNM',
      'date' => 'ABCD',
      'day' => 'ABCD',
      'time' => 'ABCD',
      'location' => 'ABCD',
      'objective1' => 'ABCD',
      'objective2' => 'ABCD',
      'objective3' => 'ABCD',
      'per_Masalah1' => 'ABCD',
      'per_Masalah2' => 'ABCD',
      'per_Masalah3' => 'ABCD',
      'description_Comment' => 'ABCD',
      'eventDetails_Comment' => 'ABCD',
      'organizer_Comment' => 'ABCD',
      'obj_Comment' => 'ABCD',

    ]); */

    /* DB::table('event_reports')->insert([
      'r_purpose' => 'ABCD',
      'r_background' => 'ABCD',
      'r_organizer_exco' => 'ZXCV',
      'r_event_director' => 'VBNM',
      'r_description_Comment' => 'ABCD',


    ]); */
  }
}
