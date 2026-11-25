<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฟอร์มบันทึกการบำเพ็ญประโยชน์</title>
    <!-- โหลด Tailwind CSS สำหรับการจัดรูปแบบ -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- โหลดฟอนต์ Sarabun จาก Google Fonts เพื่อความเป็นเอกสารราชการ/วิชาการไทย -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Sarabun', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-100 text-slate-800 font-sans antialiased min-h-screen py-6 px-3 sm:px-6 lg:px-8 print:bg-white print:p-0">

    <!-- แถบเครื่องมือด้านบน (ซ่อนเวลาสั่งพิมพ์) -->
    <div class="max-w-4xl mx-auto mb-4 flex flex-col sm:flex-row justify-between items-center gap-3 print:hidden">
        <div class="flex items-center gap-2 text-slate-700">
            <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            <span class="font-semibold text-base sm:text-lg">ระบบบันทึกข้อมูลการบำเพ็ญประโยชน์ออนไลน์</span>
        </div>
        <div class="flex items-center gap-2 w-full sm:w-auto justify-end">
            <button type="button" id="fillDemoBtn" class="px-3 py-2 text-xs sm:text-sm font-medium text-blue-700 bg-blue-50 hover:bg-blue-100 border border-blue-200 rounded-lg transition-colors">
                กรอกข้อมูลตัวอย่าง
            </button>
            <button type="button" id="resetBtn" class="px-3 py-2 text-xs sm:text-sm font-medium text-slate-600 bg-white hover:bg-slate-50 border border-slate-300 rounded-lg transition-colors">
                ล้างข้อมูล
            </button>
            <button type="button" id="printBtn" class="px-3 py-2 text-xs sm:text-sm font-medium text-slate-700 bg-white hover:bg-slate-50 border border-slate-300 rounded-lg transition-colors flex items-center gap-1.5">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                </svg>
                พิมพ์เอกสาร
            </button>
        </div>
    </div>

    <!-- กล่องกระดาษแบบฟอร์มหลัก -->
    <main class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg border border-slate-200 p-5 sm:p-10 md:p-12 print:shadow-none print:border-none print:p-4">
        
        <!-- หัวกระดาษเอกสาร -->
        <header class="text-center border-b-2 border-slate-800 pb-4 mb-6">
            <h1 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-wide">แบบบันทึกการบำเพ็ญประโยชน์ของนักศึกษา</h1>
            <p class="text-sm text-slate-500 mt-1 print:hidden">กรุณากรอกข้อมูลให้ครบถ้วนและถูกต้อง ช่องที่มีเครื่องหมาย <span class="text-red-600 font-bold">*</span> จำเป็นต้องกรอก</p>
        </header>

        <!-- เริ่มต้นฟอร์ม -->
        <form id="serviceForm" novalidate class="space-y-6 text-base leading-relaxed">

            <!-- ส่วนที่ 1: ข้อมูลนักศึกษา -->
            <section class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-start">
                    <!-- คำนำหน้าและชื่อ-นามสกุล -->
                    <div class="md:col-span-8">
                        <label class="block text-sm font-semibold text-slate-700 mb-1">
                            ด้วย ข้าพเจ้า (นาย, นางสาว) <span class="text-red-600">*</span>
                        </label>
                        <div class="flex flex-col sm:flex-row gap-2">
                            <div class="sm:w-36 shrink-0">
                                <select id="title" name="title" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-3 py-2.5 text-slate-900 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-200 outline-none transition-all print:border-0 print:border-b print:border-dotted print:border-slate-800 print:rounded-none print:bg-transparent print:px-1">
                                    <option value="">-- คำนำหน้า --</option>
                                    <option value="นาย">นาย</option>
                                    <option value="นางสาว">นางสาว</option>
                                </select>
                                <p id="error-title" class="text-red-600 text-xs mt-1 hidden"></p>
                            </div>
                            <div class="flex-1">
                                <input type="text" id="fullName" name="fullName" placeholder="ระบุชื่อ - นามสกุล (เช่น สมชาย ใจดี)" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-3.5 py-2.5 text-slate-900 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-200 outline-none transition-all print:border-0 print:border-b print:border-dotted print:border-slate-800 print:rounded-none print:bg-transparent print:px-1">
                                <p id="error-fullName" class="text-red-600 text-xs mt-1 hidden"></p>
                            </div>
                        </div>
                    </div>

                    <!-- รหัสนักศึกษา -->
                    <div class="md:col-span-4">
                        <label for="studentId" class="block text-sm font-semibold text-slate-700 mb-1">
                            รหัสนักศึกษา <span class="text-red-600">*</span>
                        </label>
                        <input type="text" id="studentId" name="studentId" inputmode="numeric" maxlength="13" placeholder="ตัวเลข 8 - 13 หลัก" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-3.5 py-2.5 text-slate-900 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-200 outline-none transition-all print:border-0 print:border-b print:border-dotted print:border-slate-800 print:rounded-none print:bg-transparent print:px-1">
                        <p id="error-studentId" class="text-red-600 text-xs mt-1 hidden"></p>
                    </div>
                </div>

                <!-- คณะ, สาขาวิชา, โทรศัพท์มือถือ -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-start">
                    <!-- คณะ -->
                    <div class="md:col-span-4">
                        <label for="faculty" class="block text-sm font-semibold text-slate-700 mb-1">
                            คณะ <span class="text-red-600">*</span>
                        </label>
                        <input type="text" id="faculty" name="faculty" placeholder="ระบุชื่อคณะ" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-3.5 py-2.5 text-slate-900 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-200 outline-none transition-all print:border-0 print:border-b print:border-dotted print:border-slate-800 print:rounded-none print:bg-transparent print:px-1">
                        <p id="error-faculty" class="text-red-600 text-xs mt-1 hidden"></p>
                    </div>

                    <!-- สาขาวิชา -->
                    <div class="md:col-span-4">
                        <label for="major" class="block text-sm font-semibold text-slate-700 mb-1">
                            สาขาวิชา <span class="text-red-600">*</span>
                        </label>
                        <input type="text" id="major" name="major" placeholder="ระบุสาขาวิชา" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-3.5 py-2.5 text-slate-900 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-200 outline-none transition-all print:border-0 print:border-b print:border-dotted print:border-slate-800 print:rounded-none print:bg-transparent print:px-1">
                        <p id="error-major" class="text-red-600 text-xs mt-1 hidden"></p>
                    </div>

                    <!-- โทรศัพท์มือถือ -->
                    <div class="md:col-span-4">
                        <label for="phone" class="block text-sm font-semibold text-slate-700 mb-1">
                            โทรศัพท์มือถือ <span class="text-red-600">*</span>
                        </label>
                        <input type="tel" id="phone" name="phone" inputmode="tel" maxlength="10" placeholder="08XXXXXXXX (10 หลัก)" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-3.5 py-2.5 text-slate-900 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-200 outline-none transition-all print:border-0 print:border-b print:border-dotted print:border-slate-800 print:rounded-none print:bg-transparent print:px-1">
                        <p id="error-phone" class="text-red-600 text-xs mt-1 hidden"></p>
                    </div>
                </div>
            </section>

            <!-- ส่วนที่ 2: รายละเอียดสถานที่และเวลา -->
            <section class="space-y-4 pt-2 border-t border-slate-100">
                <!-- สถานที่บำเพ็ญประโยชน์ -->
                <div>
                    <label for="location" class="block text-sm font-semibold text-slate-700 mb-1">
                        ได้บำเพ็ญประโยชน์ ณ (สถานที่) <span class="text-red-600">*</span>
                    </label>
                    <input type="text" id="location" name="location" placeholder="ระบุชื่อสถานที่ / หน่วยงาน / ชุมชน ที่เข้าบำเพ็ญประโยชน์" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-3.5 py-2.5 text-slate-900 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-200 outline-none transition-all print:border-0 print:border-b print:border-dotted print:border-slate-800 print:rounded-none print:bg-transparent print:px-1">
                    <p id="error-location" class="text-red-600 text-xs mt-1 hidden"></p>
                </div>

                <!-- วันที่, ตั้งแต่เวลา, ถึงเวลา, รวมเป็น (ชม.) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-4 items-start">
                    <!-- ในวันที่ -->
                    <div class="lg:col-span-4">
                        <label for="activityDate" class="block text-sm font-semibold text-slate-700 mb-1">
                            ในวันที่ <span class="text-red-600">*</span>
                        </label>
                        <input type="date" id="activityDate" name="activityDate" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-3.5 py-2.5 text-slate-900 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-200 outline-none transition-all print:border-0 print:border-b print:border-dotted print:border-slate-800 print:rounded-none print:bg-transparent print:px-1">
                        <p id="error-activityDate" class="text-red-600 text-xs mt-1 hidden"></p>
                    </div>

                    <!-- ตั้งแต่เวลา -->
                    <div class="lg:col-span-3">
                        <label for="startTime" class="block text-sm font-semibold text-slate-700 mb-1">
                            ตั้งแต่เวลา <span class="text-red-600">*</span>
                        </label>
                        <input type="time" id="startTime" name="startTime" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-3.5 py-2.5 text-slate-900 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-200 outline-none transition-all print:border-0 print:border-b print:border-dotted print:border-slate-800 print:rounded-none print:bg-transparent print:px-1">
                        <p id="error-startTime" class="text-red-600 text-xs mt-1 hidden"></p>
                    </div>

                    <!-- ถึงเวลา -->
                    <div class="lg:col-span-3">
                        <label for="endTime" class="block text-sm font-semibold text-slate-700 mb-1">
                            ถึงเวลา <span class="text-red-600">*</span>
                        </label>
                        <input type="time" id="endTime" name="endTime" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-3.5 py-2.5 text-slate-900 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-200 outline-none transition-all print:border-0 print:border-b print:border-dotted print:border-slate-800 print:rounded-none print:bg-transparent print:px-1">
                        <p id="error-endTime" class="text-red-600 text-xs mt-1 hidden"></p>
                    </div>

                    <!-- รวมเป็น (ชม.) -->
                    <div class="lg:col-span-2">
                        <label for="totalHours" class="block text-sm font-semibold text-slate-700 mb-1">
                            รวมเป็น (ชม.) <span class="text-red-600">*</span>
                        </label>
                        <input type="number" id="totalHours" name="totalHours" step="0.5" min="0.5" placeholder="0.0" class="w-full rounded-lg border border-slate-300 bg-blue-50/50 font-semibold text-blue-900 px-3.5 py-2.5 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-200 outline-none transition-all print:border-0 print:border-b print:border-dotted print:border-slate-800 print:rounded-none print:bg-transparent print:px-1 print:text-slate-900">
                        <p id="error-totalHours" class="text-red-600 text-xs mt-1 hidden"></p>
                    </div>
                </div>
            </section>

            <!-- ส่วนที่ 3: ลักษณะกิจกรรม/งานที่ได้รับมอบหมายให้ปฏิบัติ -->
            <section class="space-y-3 pt-2 border-t border-slate-100">
                <label class="block text-sm font-semibold text-slate-700">
                    ซึ่งมีลักษณะกิจกรรม/งานที่ได้รับมอบหมายให้ปฏิบัติ
                </label>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- ข้อ (๑) -->
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="font-semibold text-slate-700 shrink-0">(๑) <span class="text-red-600">*</span></span>
                            <input type="text" id="task1" name="task1" placeholder="ระบุลักษณะงานที่ปฏิบัติข้อที่ 1 (บังคับกรอก)" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-3.5 py-2 text-slate-900 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-200 outline-none transition-all print:border-0 print:border-b print:border-dotted print:border-slate-800 print:rounded-none print:bg-transparent print:px-1">
                        </div>
                        <p id="error-task1" class="text-red-600 text-xs mt-1 ml-8 hidden"></p>
                    </div>

                    <!-- ข้อ (๒) -->
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="font-semibold text-slate-700 shrink-0">(๒)</span>
                            <input type="text" id="task2" name="task2" placeholder="ระบุลักษณะงานที่ปฏิบัติข้อที่ 2 (ถ้ามี)" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-3.5 py-2 text-slate-900 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-200 outline-none transition-all print:border-0 print:border-b print:border-dotted print:border-slate-800 print:rounded-none print:bg-transparent print:px-1">
                        </div>
                    </div>

                    <!-- ข้อ (๓) -->
                    <div class="md:col-span-2">
                        <div class="flex items-center gap-2">
                            <span class="font-semibold text-slate-700 shrink-0">(๓)</span>
                            <input type="text" id="task3" name="task3" placeholder="ระบุลักษณะงานที่ปฏิบัติข้อที่ 3 (ถ้ามี)" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-3.5 py-2 text-slate-900 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-200 outline-none transition-all print:border-0 print:border-b print:border-dotted print:border-slate-800 print:rounded-none print:bg-transparent print:px-1">
                        </div>
                    </div>
                </div>
            </section>

            <!-- ส่วนที่ 4: หลักฐานภาพถ่าย (ตาราง 2 ช่องเหมือนเอกสารต้นฉบับ) -->
            <section class="pt-2">
                <p class="text-sm font-semibold text-slate-700 mb-2">
                    ทั้งนี้ ข้าพเจ้าได้แนบหลักฐานเป็นภาพถ่าย ดังภาพ <span class="text-red-600">*</span>
                    <span class="text-xs font-normal text-slate-500 ml-1 print:hidden">(รองรับไฟล์ JPG, PNG, WEBP ขนาดไม่เกิน 5MB ต่อภาพ)</span>
                </p>

                <!-- ตารางกรอบ 2 คอลัมน์ติดกัน -->
                <div class="grid grid-cols-1 md:grid-cols-2 border-2 border-slate-800 rounded-lg overflow-hidden bg-white">
                    
                    <!-- ช่องภาพที่ ๑ -->
                    <div id="photoBox1" class="border-b-2 md:border-b-0 md:border-r-2 border-slate-800 p-4 flex flex-col justify-between min-h-[280px] relative transition-colors">
                        <div class="flex justify-between items-center mb-2">
                            <span class="font-semibold text-slate-900">ภาพที่ ๑ <span class="text-red-600 print:hidden">*</span></span>
                            <button type="button" id="removePhoto1" class="hidden text-xs bg-red-100 hover:bg-red-200 text-red-700 font-medium px-2.5 py-1 rounded-md transition-colors print:hidden">
                                ลบรูปภาพ
                            </button>
                        </div>

                        <!-- พื้นที่อัปโหลด / แสดงตัวอย่างภาพที่ ๑ -->
                        <div class="flex-1 flex flex-col items-center justify-center">
                            <label for="photo1" id="uploadArea1" class="w-full h-52 border-2 border-dashed border-slate-300 hover:border-blue-500 hover:bg-blue-50/40 rounded-xl flex flex-col items-center justify-center cursor-pointer transition-all p-4 text-center print:hidden">
                                <svg class="w-10 h-10 text-slate-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span class="text-sm font-medium text-blue-700">คลิกเพื่ออัปโหลดภาพที่ ๑</span>
                                <span class="text-xs text-slate-500 mt-1">JPG, PNG หรือ WEBP (สูงสุด 5MB)</span>
                            </label>
                            <input type="file" id="photo1" name="photo1" accept="image/jpeg,image/png,image/webp" class="hidden">

                            <!-- กล่องแสดงรูปตัวอย่างที่ 1 -->
                            <div id="previewContainer1" class="hidden w-full h-56 flex items-center justify-center bg-slate-50 rounded-lg overflow-hidden border border-slate-200 print:border-none print:bg-transparent">
                                <img id="previewImg1" src="" alt="ตัวอย่างภาพที่ ๑" class="max-h-full max-w-full object-contain">
                            </div>
                        </div>
                        <p id="error-photo1" class="text-red-600 text-xs mt-2 text-center hidden"></p>
                    </div>

                    <!-- ช่องภาพที่ ๒ -->
                    <div id="photoBox2" class="p-4 flex flex-col justify-between min-h-[280px] relative transition-colors">
                        <div class="flex justify-between items-center mb-2">
                            <span class="font-semibold text-slate-900">ภาพที่ ๒ <span class="text-red-600 print:hidden">*</span></span>
                            <button type="button" id="removePhoto2" class="hidden text-xs bg-red-100 hover:bg-red-200 text-red-700 font-medium px-2.5 py-1 rounded-md transition-colors print:hidden">
                                ลบรูปภาพ
                            </button>
                        </div>

                        <!-- พื้นที่อัปโหลด / แสดงตัวอย่างภาพที่ ๒ -->
                        <div class="flex-1 flex flex-col items-center justify-center">
                            <label for="photo2" id="uploadArea2" class="w-full h-52 border-2 border-dashed border-slate-300 hover:border-blue-500 hover:bg-blue-50/40 rounded-xl flex flex-col items-center justify-center cursor-pointer transition-all p-4 text-center print:hidden">
                                <svg class="w-10 h-10 text-slate-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span class="text-sm font-medium text-blue-700">คลิกเพื่ออัปโหลดภาพที่ ๒</span>
                                <span class="text-xs text-slate-500 mt-1">JPG, PNG หรือ WEBP (สูงสุด 5MB)</span>
                            </label>
                            <input type="file" id="photo2" name="photo2" accept="image/jpeg,image/png,image/webp" class="hidden">

                            <!-- กล่องแสดงรูปตัวอย่างที่ 2 -->
                            <div id="previewContainer2" class="hidden w-full h-56 flex items-center justify-center bg-slate-50 rounded-lg overflow-hidden border border-slate-200 print:border-none print:bg-transparent">
                                <img id="previewImg2" src="" alt="ตัวอย่างภาพที่ ๒" class="max-h-full max-w-full object-contain">
                            </div>
                        </div>
                        <p id="error-photo2" class="text-red-600 text-xs mt-2 text-center hidden"></p>
                    </div>

                </div>
            </section>

            <!-- ส่วนลงนามสำหรับโหมดพิมพ์เอกสาร -->
            <section class="hidden print:grid grid-cols-2 gap-8 pt-10 text-center text-sm">
                <div>
                    <p>ลงชื่อ..........................................................ผู้บำเพ็ญประโยชน์</p>
                    <p class="mt-2">(..........................................................)</p>
                </div>
                <div>
                    <p>ลงชื่อ..........................................................ผู้รับรองกิจกรรม</p>
                    <p class="mt-2">(..........................................................)</p>
                </div>
            </section>

            <!-- ปุ่มส่งแบบฟอร์ม (ซ่อนเวลาสั่งพิมพ์) -->
            <div class="pt-4 flex flex-col sm:flex-row items-center justify-end gap-3 border-t border-slate-200 print:hidden">
                <p id="formGlobalError" class="text-red-600 text-sm font-medium hidden mr-auto">
                    ⚠️ กรุณาตรวจสอบและแก้ไขข้อมูลในช่องที่มีกรอบสีแดงให้ถูกต้อง
                </p>
                <button type="submit" class="w-full sm:w-auto px-8 py-3 bg-blue-700 hover:bg-blue-800 active:bg-blue-900 text-white font-semibold rounded-xl shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    ตรวจสอบและบันทึกข้อมูล
                </button>
            </div>
        </form>
    </main>

    <!-- หน้าต่าง Modal แสดงสรุปผลเมื่อข้อมูลถูกต้องทั้งหมด -->
    <div id="summaryModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-900/60 backdrop-blur-sm p-4 overflow-y-auto print:hidden">
        <div class="bg-white rounded-2xl shadow-2xl max-w-2xl w-full p-6 sm:p-8 border border-slate-200 my-8 transform transition-all">
            <div class="flex items-center gap-3 text-emerald-700 border-b border-slate-200 pb-4 mb-4">
                <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold text-slate-900">ตรวจสอบข้อมูลสำเร็จ!</h2>
                    <p class="text-sm text-slate-500">ข้อมูลการบำเพ็ญประโยชน์ของท่านถูกต้องครบถ้วนพร้อมบันทึก</p>
                </div>
            </div>

            <!-- รายละเอียดข้อมูลสรุป -->
            <div id="summaryContent" class="space-y-3 text-sm text-slate-700 bg-slate-50 p-4 rounded-xl border border-slate-200 max-h-[60vh] overflow-y-auto">
                <!-- เนื้อหาจะถูกแทรกด้วย JavaScript -->
            </div>

            <div class="mt-6 flex flex-col sm:flex-row justify-end gap-3">
                <button type="button" id="modalPrintBtn" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-800 font-medium rounded-xl transition-colors flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                    </svg>
                    พิมพ์แบบฟอร์ม
                </button>
                <button type="button" id="closeModalBtn" class="px-6 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-xl transition-colors">
                    ตกลง / ปิดหน้าต่าง
                </button>
            </div>
        </div>
    </div>

    <!-- JavaScript สำหรับการตรวจสอบข้อมูล (Validation) และการจัดการฟอร์ม -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('serviceForm');
            const formGlobalError = document.getElementById('formGlobalError');

            // อ้างอิง Element ของ Input ต่างๆ
            const fields = {
                title: document.getElementById('title'),
                fullName: document.getElementById('fullName'),
                studentId: document.getElementById('studentId'),
                faculty: document.getElementById('faculty'),
                major: document.getElementById('major'),
                phone: document.getElementById('phone'),
                location: document.getElementById('location'),
                activityDate: document.getElementById('activityDate'),
                startTime: document.getElementById('startTime'),
                endTime: document.getElementById('endTime'),
                totalHours: document.getElementById('totalHours'),
                task1: document.getElementById('task1'),
                task2: document.getElementById('task2'),
                task3: document.getElementById('task3'),
                photo1: document.getElementById('photo1'),
                photo2: document.getElementById('photo2')
            };

            // สถานะการตรวจสอบรูปภาพ
            const photoValidState = {
                photo1: false,
                photo2: false
            };

            // ฟังก์ชันแสดงข้อความ Error ใต้ช่องกรอก
            function showError(fieldKey, message) {
                const inputEl = fields[fieldKey];
                const errorEl = document.getElementById(`error-${fieldKey}`);
                
                if (errorEl) {
                    errorEl.textContent = message;
                    errorEl.classList.remove('hidden');
                }

                if (fieldKey === 'photo1' || fieldKey === 'photo2') {
                    const uploadArea = document.getElementById(fieldKey === 'photo1' ? 'uploadArea1' : 'uploadArea2');
                    uploadArea.classList.remove('border-slate-300');
                    uploadArea.classList.add('border-red-500', 'bg-red-50/40');
                } else if (inputEl) {
                    inputEl.classList.remove('border-slate-300', 'focus:border-blue-600');
                    inputEl.classList.add('border-red-500', 'bg-red-50/30', 'focus:border-red-600');
                }
            }

            // ฟังก์ชันล้างข้อความ Error เมื่อข้อมูลถูกต้อง
            function clearError(fieldKey) {
                const inputEl = fields[fieldKey];
                const errorEl = document.getElementById(`error-${fieldKey}`);
                
                if (errorEl) {
                    errorEl.textContent = '';
                    errorEl.classList.add('hidden');
                }

                if (fieldKey === 'photo1' || fieldKey === 'photo2') {
                    const uploadArea = document.getElementById(fieldKey === 'photo1' ? 'uploadArea1' : 'uploadArea2');
                    uploadArea.classList.remove('border-red-500', 'bg-red-50/40');
                    uploadArea.classList.add('border-slate-300');
                } else if (inputEl) {
                    inputEl.classList.remove('border-red-500', 'bg-red-50/30', 'focus:border-red-600');
                    inputEl.classList.add('border-slate-300', 'focus:border-blue-600');
                }
            }

            // ฟังก์ชันคำนวณจำนวนชั่วโมงอัตโนมัติจากเวลาเริ่มต้นและเวลาสิ้นสุด
            function calculateHours() {
                const start = fields.startTime.value;
                const end = fields.endTime.value;

                if (start && end) {
                    const [startH, startM] = start.split(':').map(Number);
                    const [endH, endM] = end.split(':').map(Number);

                    const startMinutes = startH * 60 + startM;
                    const endMinutes = endH * 60 + endM;

                    if (endMinutes > startMinutes) {
                        const diffHours = (endMinutes - startMinutes) / 60;
                        // ปัดเศษทศนิยม 2 ตำแหน่ง (และตัด .00 ออกถ้าลงตัว)
                        fields.totalHours.value = Number(diffHours.toFixed(2));
                        clearError('endTime');
                        clearError('totalHours');
                    } else {
                        fields.totalHours.value = '';
                        showError('endTime', 'เวลาสิ้นสุดต้องมากกว่าเวลาเริ่มต้น');
                    }
                }
            }

            // กฎการตรวจสอบรายฟิลด์ (Field-level Validation)
            const validators = {
                title: () => {
                    if (!fields.title.value.trim()) {
                        showError('title', 'กรุณาเลือกคำนำหน้า');
                        return false;
                    }
                    clearError('title');
                    return true;
                },
                fullName: () => {
                    const val = fields.fullName.value.trim();
                    if (!val) {
                        showError('fullName', 'กรุณากรอกชื่อ-นามสกุล');
                        return false;
                    }
                    if (val.length < 3 || !val.includes(' ')) {
                        showError('fullName', 'กรุณากรอกทั้งชื่อและนามสกุลให้ครบถ้วน');
                        return false;
                    }
                    clearError('fullName');
                    return true;
                },
                studentId: () => {
                    const val = fields.studentId.value.trim();
                    if (!val) {
                        showError('studentId', 'กรุณากรอกรหัสนักศึกษา');
                        return false;
                    }
                    if (!/^\d{8,13}$/.test(val)) {
                        showError('studentId', 'รหัสนักศึกษาต้องเป็นตัวเลข 8 - 13 หลักเท่านั้น');
                        return false;
                    }
                    clearError('studentId');
                    return true;
                },
                faculty: () => {
                    if (!fields.faculty.value.trim()) {
                        showError('faculty', 'กรุณากรอกชื่อคณะ');
                        return false;
                    }
                    clearError('faculty');
                    return true;
                },
                major: () => {
                    if (!fields.major.value.trim()) {
                        showError('major', 'กรุณากรอกสาขาวิชา');
                        return false;
                    }
                    clearError('major');
                    return true;
                },
                phone: () => {
                    const val = fields.phone.value.trim();
                    if (!val) {
                        showError('phone', 'กรุณากรอกเบอร์โทรศัพท์มือถือ');
                        return false;
                    }
                    if (!/^0[689]\d{8}$/.test(val)) {
                        showError('phone', 'เบอร์มือถือต้องเป็นตัวเลข 10 หลัก และขึ้นต้นด้วย 06, 08 หรือ 09');
                        return false;
                    }
                    clearError('phone');
                    return true;
                },
                location: () => {
                    if (!fields.location.value.trim()) {
                        showError('location', 'กรุณาระบุสถานที่บำเพ็ญประโยชน์');
                        return false;
                    }
                    clearError('location');
                    return true;
                },
                activityDate: () => {
                    if (!fields.activityDate.value) {
                        showError('activityDate', 'กรุณาเลือกวันที่บำเพ็ญประโยชน์');
                        return false;
                    }
                    clearError('activityDate');
                    return true;
                },
                startTime: () => {
                    if (!fields.startTime.value) {
                        showError('startTime', 'กรุณาระบุเวลาเริ่มต้น');
                        return false;
                    }
                    clearError('startTime');
                    return true;
                },
                endTime: () => {
                    if (!fields.endTime.value) {
                        showError('endTime', 'กรุณาระบุเวลาสิ้นสุด');
                        return false;
                    }
                    if (fields.startTime.value && fields.endTime.value <= fields.startTime.value) {
                        showError('endTime', 'เวลาสิ้นสุดต้องมากกว่าเวลาเริ่มต้น');
                        return false;
                    }
                    clearError('endTime');
                    return true;
                },
                totalHours: () => {
                    const hours = parseFloat(fields.totalHours.value);
                    if (isNaN(hours) || hours <= 0) {
                        showError('totalHours', 'จำนวนชั่วโมงต้องมากกว่า 0');
                        return false;
                    }
                    if (hours > 24) {
                        showError('totalHours', 'จำนวนชั่วโมงต่อวันไม่ควรเกิน 24 ชม.');
                        return false;
                    }
                    clearError('totalHours');
                    return true;
                },
                task1: () => {
                    if (!fields.task1.value.trim()) {
                        showError('task1', 'กรุณาระบุลักษณะกิจกรรม/งานที่ปฏิบัติอย่างน้อย 1 ข้อ');
                        return false;
                    }
                    clearError('task1');
                    return true;
                },
                photo1: () => {
                    if (!photoValidState.photo1) {
                        showError('photo1', 'กรุณาแนบหลักฐานภาพถ่ายที่ ๑');
                        return false;
                    }
                    clearError('photo1');
                    return true;
                },
                photo2: () => {
                    if (!photoValidState.photo2) {
                        showError('photo2', 'กรุณาแนบหลักฐานภาพถ่ายที่ ๒');
                        return false;
                    }
                    clearError('photo2');
                    return true;
                }
            };

            // กรองเฉพาะตัวเลขสำหรับช่องรหัสนักศึกษาและเบอร์โทรศัพท์ขณะพิมพ์
            fields.studentId.addEventListener('input', (e) => {
                e.target.value = e.target.value.replace(/\D/g, '');
                validators.studentId();
            });

            fields.phone.addEventListener('input', (e) => {
                e.target.value = e.target.value.replace(/\D/g, '');
                validators.phone();
            });

            // ผูก Event Real-time Validation กับฟิลด์ข้อความและตัวเลือก
            ['title', 'fullName', 'faculty', 'major', 'location', 'activityDate', 'totalHours', 'task1'].forEach(key => {
                const eventType = fields[key].tagName === 'SELECT' || fields[key].type === 'date' ? 'change' : 'input';
                fields[key].addEventListener(eventType, () => validators[key]());
                fields[key].addEventListener('blur', () => validators[key]());
            });

            // ผูก Event คำนวณชั่วโมงเมื่อเปลี่ยนเวลา
            fields.startTime.addEventListener('change', () => {
                validators.startTime();
                calculateHours();
            });
            fields.endTime.addEventListener('change', () => {
                validators.endTime();
                calculateHours();
            });

            // ฟังก์ชันจัดการการอัปโหลดและตรวจสอบไฟล์รูปภาพ
            function setupImageUpload(photoNum) {
                const key = `photo${photoNum}`;
                const inputEl = fields[key];
                const uploadArea = document.getElementById(`uploadArea${photoNum}`);
                const previewContainer = document.getElementById(`previewContainer${photoNum}`);
                const previewImg = document.getElementById(`previewImg${photoNum}`);
                const removeBtn = document.getElementById(`removePhoto${photoNum}`);

                const allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];
                const maxSizeBytes = 5 * 1024 * 1024; // 5MB

                inputEl.addEventListener('change', (e) => {
                    const file = e.target.files[0];
                    if (!file) return;

                    // ตรวจสอบนามสกุลไฟล์
                    if (!allowedTypes.includes(file.type)) {
                        inputEl.value = '';
                        photoValidState[key] = false;
                        showError(key, 'รูปแบบไฟล์ไม่ถูกต้อง (รองรับเฉพาะ JPG, PNG, WEBP)');
                        return;
                    }

                    // ตรวจสอบขนาดไฟล์ (ไม่เกิน 5MB)
                    if (file.size > maxSizeBytes) {
                        inputEl.value = '';
                        photoValidState[key] = false;
                        showError(key, 'ขนาดไฟล์เกิน 5MB กรุณาเลือกไฟล์ที่มีขนาดเล็กกว่า');
                        return;
                    }

                    // อ่านไฟล์และแสดงภาพตัวอย่าง
                    const reader = new FileReader();
                    reader.onload = (event) => {
                        previewImg.src = event.target.result;
                        uploadArea.classList.add('hidden');
                        previewContainer.classList.remove('hidden');
                        removeBtn.classList.remove('hidden');
                        photoValidState[key] = true;
                        clearError(key);
                    };
                    reader.readAsDataURL(file);
                });

                // ปุ่มลบรูปภาพ
                removeBtn.addEventListener('click', () => {
                    inputEl.value = '';
                    previewImg.src = '';
                    previewContainer.classList.add('hidden');
                    removeBtn.classList.add('hidden');
                    uploadArea.classList.remove('hidden');
                    photoValidState[key] = false;
                    validators[key]();
                });
            }

            setupImageUpload(1);
            setupImageUpload(2);

            // ฟังก์ชันแปลงวันที่ YYYY-MM-DD เป็นรูปแบบวันที่ภาษาไทย
            function formatThaiDate(dateStr) {
                if (!dateStr) return '-';
                const months = [
                    'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน',
                    'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
                ];
                const [year, month, day] = dateStr.split('-').map(Number);
                return `${day} ${months[month - 1]} พ.ศ. ${year + 543}`;
            }

            // การจัดการเมื่อกดปุ่มส่งแบบฟอร์ม (Submit)
            form.addEventListener('submit', (e) => {
                e.preventDefault();

                const validationOrder = [
                    'title', 'fullName', 'studentId', 'faculty', 'major', 'phone',
                    'location', 'activityDate', 'startTime', 'endTime', 'totalHours',
                    'task1', 'photo1', 'photo2'
                ];

                let firstInvalidKey = null;
                let isAllValid = true;

                validationOrder.forEach(key => {
                    const isValid = validators[key]();
                    if (!isValid) {
                        isAllValid = false;
                        if (!firstInvalidKey) {
                            firstInvalidKey = key;
                        }
                    }
                });

                if (!isAllValid) {
                    formGlobalError.classList.remove('hidden');
                    // เลื่อนหน้าจอไปยังช่องแรกที่ผิดพลาดและโฟกัส
                    const targetEl = (firstInvalidKey === 'photo1' || firstInvalidKey === 'photo2')
                        ? document.getElementById(firstInvalidKey === 'photo1' ? 'photoBox1' : 'photoBox2')
                        : fields[firstInvalidKey];

                    if (targetEl) {
                        targetEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        if (targetEl.focus) targetEl.focus();
                    }
                    return;
                }

                // ซ่อนข้อความแจ้งเตือนรวมเมื่อผ่านทั้งหมด
                formGlobalError.classList.add('hidden');

                // สร้างข้อมูลสรุปใน Modal
                const summaryContent = document.getElementById('summaryContent');
                const tasksList = [fields.task1.value.trim(), fields.task2.value.trim(), fields.task3.value.trim()]
                    .filter(Boolean)
                    .map((t, idx) => `<li>(${idx + 1}) ${t}</li>`)
                    .join('');

                summaryContent.innerHTML = `
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                        <p><span class="font-semibold text-slate-900">ชื่อ-นามสกุล:</span> ${fields.title.value}${fields.fullName.value.trim()}</p>
                        <p><span class="font-semibold text-slate-900">รหัสนักศึกษา:</span> ${fields.studentId.value.trim()}</p>
                        <p><span class="font-semibold text-slate-900">คณะ:</span> ${fields.faculty.value.trim()}</p>
                        <p><span class="font-semibold text-slate-900">สาขาวิชา:</span> ${fields.major.value.trim()}</p>
                        <p class="sm:col-span-2"><span class="font-semibold text-slate-900">เบอร์โทรศัพท์มือถือ:</span> ${fields.phone.value.trim()}</p>
                    </div>
                    <hr class="border-slate-200 my-2">
                    <p><span class="font-semibold text-slate-900">สถานที่บำเพ็ญประโยชน์:</span> ${fields.location.value.trim()}</p>
                    <p><span class="font-semibold text-slate-900">วันที่ปฏิบัติงาน:</span> ${formatThaiDate(fields.activityDate.value)}</p>
                    <p><span class="font-semibold text-slate-900">ช่วงเวลา:</span> ${fields.startTime.value} น. ถึง ${fields.endTime.value} น. <span class="inline-block bg-blue-100 text-blue-800 font-semibold px-2 py-0.5 rounded ml-1">รวม ${fields.totalHours.value} ชั่วโมง</span></p>
                    <div>
                        <span class="font-semibold text-slate-900">ลักษณะกิจกรรม/งานที่ได้รับมอบหมาย:</span>
                        <ul class="list-none pl-2 mt-1 space-y-1 text-slate-700">${tasksList}</ul>
                    </div>
                    <hr class="border-slate-200 my-2">
                    <p class="font-semibold text-slate-900">หลักฐานภาพถ่ายแนบ:</p>
                    <div class="grid grid-cols-2 gap-3 mt-1">
                        <div class="border border-slate-300 rounded-lg p-2 bg-white text-center">
                            <img src="${document.getElementById('previewImg1').src}" class="h-28 w-full object-contain mx-auto rounded">
                            <span class="text-xs text-slate-500 mt-1 block">ภาพที่ ๑</span>
                        </div>
                        <div class="border border-slate-300 rounded-lg p-2 bg-white text-center">
                            <img src="${document.getElementById('previewImg2').src}" class="h-28 w-full object-contain mx-auto rounded">
                            <span class="text-xs text-slate-500 mt-1 block">ภาพที่ ๒</span>
                        </div>
                    </div>
                `;

                const modal = document.getElementById('summaryModal');
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            });

            // ปุ่มปิด Modal
            document.getElementById('closeModalBtn').addEventListener('click', () => {
                const modal = document.getElementById('summaryModal');
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            });

            // ปุ่มสั่งพิมพ์เอกสาร
            document.getElementById('printBtn').addEventListener('click', () => window.print());
            document.getElementById('modalPrintBtn').addEventListener('click', () => {
                document.getElementById('summaryModal').classList.add('hidden');
                document.getElementById('summaryModal').classList.remove('flex');
                window.print();
            });

            // ปุ่มล้างข้อมูลทั้งหมด
            document.getElementById('resetBtn').addEventListener('click', () => {
                form.reset();
                formGlobalError.classList.add('hidden');
                Object.keys(fields).forEach(key => clearError(key));
                document.getElementById('removePhoto1').click();
                document.getElementById('removePhoto2').click();
                clearError('photo1');
                clearError('photo2');
            });

            // ปุ่มกรอกข้อมูลตัวอย่าง (ช่วยให้ทดสอบระบบได้ทันที)
            document.getElementById('fillDemoBtn').addEventListener('click', () => {
                fields.title.value = 'นาย';
                fields.fullName.value = 'กิตติพงศ์ รักเรียน';
                fields.studentId.value = '6601012345';
                fields.faculty.value = 'วิทยาศาสตร์และเทคโนโลยี';
                fields.major.value = 'วิทยาการคอมพิวเตอร์';
                fields.phone.value = '0891234567';
                fields.location.value = 'วัดป่าคลองกุ้ง ตำบลตลาด อำเภอเมือง จังหวัดจันทบุรี';
                fields.activityDate.value = new Date().toISOString().split('T')[0];
                fields.startTime.value = '08:30';
                fields.endTime.value = '12:30';
                calculateHours();
                fields.task1.value = 'ทำความสะอาดลานวัดและกวาดใบไม้บริเวณรอบพระอุโบสถ';
                fields.task2.value = 'จัดเตรียมสถานที่และเก้าอี้สำหรับงานบุญประจำเดือน';
                fields.task3.value = 'คัดแยกขยะรีไซเคิลภายในบริเวณวัด';

                // สร้างภาพตัวอย่างจำลองด้วย Canvas เพื่อแสดงพรีวิวทันที
                [1, 2].forEach(num => {
                    const canvas = document.createElement('canvas');
                    canvas.width = 600;
                    canvas.height = 400;
                    const ctx = canvas.getContext('2d');
                    ctx.fillStyle = num === 1 ? '#e0f2fe' : '#dcfce7';
                    ctx.fillRect(0, 0, 600, 400);
                    ctx.strokeStyle = num === 1 ? '#0284c7' : '#16a34a';
                    ctx.lineWidth = 8;
                    ctx.strokeRect(20, 20, 560, 360);
                    ctx.fillStyle = '#1e293b';
                    ctx.font = 'bold 28px Sarabun, sans-serif';
                    ctx.textAlign = 'center';
                    ctx.fillText(`ภาพหลักฐานการบำเพ็ญประโยชน์ (ภาพที่ ${num})`, 300, 190);
                    ctx.font = '20px Sarabun, sans-serif';
                    ctx.fillStyle = '#475569';
                    ctx.fillText('ตัวอย่างภาพถ่ายสำหรับทดสอบระบบ', 300, 230);

                    const previewImg = document.getElementById(`previewImg${num}`);
                    previewImg.src = canvas.toDataURL('image/png');
                    document.getElementById(`uploadArea${num}`).classList.add('hidden');
                    document.getElementById(`previewContainer${num}`).classList.remove('hidden');
                    document.getElementById(`removePhoto${num}`).classList.remove('hidden');
                    photoValidState[`photo${num}`] = true;
                });

                // ล้างสถานะ Error ทั้งหมด
                formGlobalError.classList.add('hidden');
                Object.keys(fields).forEach(key => clearError(key));
            });
        });
    </script>
</body>
</html>