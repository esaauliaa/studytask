<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyTask</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Fredoka:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Fredoka', sans-serif;
        }

        .title-font {
            font-family: 'Chewy', cursive;
        }

        .retro-bg {
            background:
                radial-gradient(circle at 20% 20%, rgba(255,255,255,0.35) 0 8px, transparent 8px),
                radial-gradient(circle at 80% 10%, rgba(255,255,255,0.25) 0 6px, transparent 6px),
                radial-gradient(circle at 15% 80%, rgba(255,255,255,0.25) 0 7px, transparent 7px),
                radial-gradient(circle at 85% 75%, rgba(255,255,255,0.25) 0 10px, transparent 10px),
                linear-gradient(135deg, #d8c9ff 0%, #f5d7ec 100%);
            min-height: 100vh;
        }

        .window-card {
            border: 3px solid #3f2b63;
            box-shadow: 6px 6px 0 #3f2b63;
        }

        .mini-window-bar {
            border-bottom: 3px solid #3f2b63;
            background: #ffd6ea;
        }

        .retro-input {
            border: 3px solid #3f2b63;
            background: #fff9f2;
            box-shadow: 4px 4px 0 #c49bd9;
        }

        .retro-input:focus {
            outline: none;
            box-shadow: 4px 4px 0 #8d6ad6;
        }

        .retro-btn {
            border: 3px solid #3f2b63;
            box-shadow: 4px 4px 0 #3f2b63;
            transition: 0.15s ease;
        }

        .retro-btn:hover {
            transform: translate(-2px, -2px);
            box-shadow: 6px 6px 0 #3f2b63;
        }

        .retro-btn:active {
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0 #3f2b63;
        }

        .task-item {
            border: 3px solid #3f2b63;
            box-shadow: 3px 3px 0 #3f2b63;
        }

        .grid-paper {
            background-color: #fff8ef;
            background-image:
                linear-gradient(to right, rgba(179, 165, 201, 0.20) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(179, 165, 201, 0.20) 1px, transparent 1px);
            background-size: 24px 24px;
        }

        .status-pill {
            border: 2px solid #3f2b63;
            font-weight: 600;
        }

        .custom-checkbox {
            width: 22px;
            height: 22px;
            accent-color: #ff5a92;
            cursor: pointer;
        }

        .task-scroll::-webkit-scrollbar {
            width: 10px;
        }

        .task-scroll::-webkit-scrollbar-track {
            background: #ffeef7;
            border: 2px solid #3f2b63;
            border-radius: 20px;
        }

        .task-scroll::-webkit-scrollbar-thumb {
            background: #caa8ff;
            border: 2px solid #3f2b63;
            border-radius: 20px;
        }
    </style>
</head>
<body class="retro-bg overflow-x-hidden">

    <div class="max-w-6xl mx-auto px-4 py-4">

        <!-- HEADER -->
        <div class="window-card bg-[#ffe8f3] rounded-[20px] overflow-hidden mb-4">
            <div class="mini-window-bar flex items-center justify-between px-5 py-2">
                <div class="flex items-center gap-2">
                    <span class="w-4 h-4 rounded-full bg-[#ff8ec7] border-2 border-[#3f2b63]"></span>
                    <span class="w-4 h-4 rounded-full bg-[#ffe36e] border-2 border-[#3f2b63]"></span>
                    <span class="w-4 h-4 rounded-full bg-[#89e3a1] border-2 border-[#3f2b63]"></span>
                </div>

                <p class="text-[#3f2b63] font-bold text-sm tracking-wide">
                    AJAX MINI PROJECT
                </p>

                <div class="text-[#3f2b63] text-xl">✨</div>
            </div>

            <div class="px-5 py-3 bg-[#ffeef7] flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <h1 class="title-font text-4xl md:text-5xl text-[#ff5a92] leading-none drop-shadow-[2px_2px_0_#3f2b63]">
                        StudyTask
                    </h1>
                    <p class="text-[#5e4c7c] mt-2 text-sm md:text-base max-w-2xl">
                        Catat tugas, atur deadline, cek status, dan kelola daftar tugas kuliah dalam satu aplikasi sederhana.
                    </p>
                </div>

                <!-- FITUR STUDYTASK -->
                <div class="w-full md:w-[380px] h-[130px] rounded-[18px] border-[3px] border-[#3f2b63] bg-[#fff8ef] shadow-[5px_5px_0_#3f2b63] shrink-0 p-2">
                    <div class="w-full h-full rounded-[16px] border-[3px] border-[#3f2b63] bg-[#ffeef7] overflow-hidden">
                        <div class="h-7 bg-[#ffb8d8] border-b-[3px] border-[#3f2b63] flex items-center justify-between px-3">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-[#ff8ec7] border-2 border-[#3f2b63]"></span>
                                <span class="w-3 h-3 rounded-full bg-[#ffe36e] border-2 border-[#3f2b63]"></span>
                                <span class="w-3 h-3 rounded-full bg-[#89e3a1] border-2 border-[#3f2b63]"></span>
                            </div>

                            <span class="text-[#3f2b63] font-extrabold text-xs">
                                Fitur StudyTask
                            </span>
                        </div>

                        <div class="grid grid-cols-4 gap-2 p-2 h-[75px]">
                            <div class="rounded-xl border-[3px] border-[#3f2b63] bg-[#fff49a] flex flex-col items-center justify-center shadow-[3px_3px_0_#3f2b63]">
                                <span class="text-lg leading-none">➕</span>
                                <span class="text-[10px] font-extrabold text-[#3f2b63] mt-1 text-center leading-tight">
                                    Tambah Tugas
                                </span>
                            </div>

                            <div class="rounded-xl border-[3px] border-[#3f2b63] bg-[#caa8ff] flex flex-col items-center justify-center shadow-[3px_3px_0_#3f2b63]">
                                <span class="text-lg leading-none">📋</span>
                                <span class="text-[10px] font-extrabold text-[#3f2b63] mt-1 text-center leading-tight">
                                    Lihat Daftar<br>Tugas
                                </span>
                            </div>

                            <div class="rounded-xl border-[3px] border-[#3f2b63] bg-[#b8f1d3] flex flex-col items-center justify-center shadow-[3px_3px_0_#3f2b63]">
                                <span class="text-lg leading-none">✏️</span>
                                <span class="text-[10px] font-extrabold text-[#3f2b63] mt-1 text-center leading-tight">
                                    Edit Tugas
                                </span>
                            </div>

                            <div class="rounded-xl border-[3px] border-[#3f2b63] bg-[#ffb8d8] flex flex-col items-center justify-center shadow-[3px_3px_0_#3f2b63]">
                                <span class="text-lg leading-none">🗑️</span>
                                <span class="text-[10px] font-extrabold text-[#3f2b63] mt-1 text-center leading-tight">
                                    Hapus Tugas
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ALERT -->
        <div id="alertBox" class="hidden mb-4 px-5 py-3 rounded-2xl text-sm font-semibold border-[3px] border-[#3f2b63] shadow-[4px_4px_0_#3f2b63]"></div>

        <!-- BAGIAN UTAMA -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 items-start">

            <!-- KIRI: TAMBAH TUGAS -->
            <div class="window-card rounded-[20px] overflow-hidden bg-[#fff8ef] h-fit">
                <div class="mini-window-bar px-4 py-2 flex items-center justify-between">
                    <h2 class="title-font text-2xl text-[#3f2b63]">
                        Tambah Tugas
                    </h2>
                    <span class="text-xl">💌</span>
                </div>

                <div class="p-4 grid-paper">
                    <form id="taskForm" class="space-y-4">
                        <div>
                            <label class="block text-[#3f2b63] font-bold mb-2">
                                Judul Tugas
                            </label>
                            <input
                                type="text"
                                name="title"
                                id="title"
                                class="retro-input w-full rounded-xl px-3 py-2 text-sm text-[#3f2b63]"
                                placeholder="Contoh: Mini Project AJAX"
                            >
                            <p id="titleError" class="hidden text-sm text-red-500 mt-2 font-semibold"></p>
                        </div>

                        <div>
                            <label class="block text-[#3f2b63] font-bold mb-2">
                                Mata Kuliah
                            </label>
                            <input
                                type="text"
                                name="course"
                                id="course"
                                class="retro-input w-full rounded-xl px-3 py-2 text-sm text-[#3f2b63]"
                                placeholder="Contoh: Pemrograman Web"
                            >
                            <p id="courseError" class="hidden text-sm text-red-500 mt-2 font-semibold"></p>
                        </div>

                        <div>
                            <label class="block text-[#3f2b63] font-bold mb-2">
                                Deskripsi
                            </label>
                            <textarea
                                name="description"
                                id="description"
                                rows="3"
                                class="retro-input w-full rounded-xl px-3 py-2 text-sm text-[#3f2b63]"
                                placeholder="Contoh: Membuat project sederhana menggunakan Laravel dan mengimplementasikan AJAX"
                            ></textarea>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <div>
                                <label class="block text-[#3f2b63] font-bold mb-2">
                                    Tanggal Deadline
                                </label>
                                <input
                                    type="date"
                                    name="deadline_date"
                                    id="deadlineDate"
                                    class="retro-input w-full rounded-xl px-3 py-2 text-sm text-[#3f2b63]"
                                >
                            </div>

                            <div>
                                <label class="block text-[#3f2b63] font-bold mb-2">
                                    Jam Deadline
                                </label>
                                <input
                                    type="text"
                                    name="deadline_time"
                                    id="deadlineTime"
                                    maxlength="5"
                                    placeholder="Contoh: 00:00"
                                    class="retro-input w-full rounded-xl px-3 py-2 text-sm text-[#3f2b63]"
                                >
                            </div>
                        </div>

                        <button
                            type="submit"
                            id="submitButton"
                            class="retro-btn w-full rounded-xl px-4 py-2 bg-[#5a7cff] text-white font-bold text-base"
                        >
                            Tambah Tugas
                        </button>
                    </form>
                </div>
            </div>

            <!-- KANAN: DAFTAR TUGAS -->
            <div class="window-card rounded-[20px] overflow-hidden bg-[#fff8ef] h-fit">
                <div class="mini-window-bar px-4 py-2 flex items-center justify-between">
                    <h2 class="title-font text-2xl text-[#3f2b63]">
                        Daftar Tugas
                    </h2>
                    <span class="text-xl">📚</span>
                </div>

                <div class="p-4 grid-paper">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-4">
                        <input
                            type="text"
                            id="searchInput"
                            class="retro-input w-full rounded-xl px-3 py-2 text-sm text-[#3f2b63]"
                            placeholder="Cari tugas..."
                        >

                        <select
                            id="statusFilter"
                            class="retro-input w-full rounded-xl px-3 py-2 text-sm text-[#3f2b63]"
                        >
                            <option value="semua">Semua Status</option>
                            <option value="belum_selesai">Belum Selesai</option>
                            <option value="selesai">Selesai</option>
                        </select>
                    </div>

                    <div id="taskList" class="space-y-3 max-h-[430px] overflow-y-auto pr-2 task-scroll">
                        @forelse ($tasks as $task)
                            <div id="task-{{ $task->id }}" class="task-item rounded-[18px] p-4 bg-white/90" data-deadline="{{ $task->deadline ? $task->deadline->format('Y-m-d\TH:i') : '' }}">
                                <div class="flex items-start gap-4">
                                    <input
                                        type="checkbox"
                                        class="custom-checkbox mt-1"
                                        onchange="toggleTask({{ $task->id }})"
                                        {{ $task->status === 'selesai' ? 'checked' : '' }}
                                    >

                                    <div class="flex-1">
                                        <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-3">
                                            <div>
                                                <h3 class="font-extrabold text-lg {{ $task->status === 'selesai' ? 'line-through text-slate-400' : 'text-[#3f2b63]' }}">
                                                    {{ $task->title }}
                                                </h3>

                                                <p class="text-[#ff5a92] font-bold mt-1">
                                                    {{ $task->course }}
                                                </p>
                                            </div>

                                            <span class="status-pill inline-block px-3 py-1.5 rounded-full text-sm {{ $task->status === 'selesai' ? 'bg-[#b8f1d3] text-[#2f6144]' : 'bg-[#d9c2ff] text-[#4b2e83]' }}">
                                                {{ $task->status === 'selesai' ? 'Selesai' : 'Belum Selesai' }}
                                            </span>
                                        </div>

                                        <div class="flex items-center justify-between gap-3 mt-2">
                                            <p class="text-sm text-[#7f6b9b] font-semibold">
                                                Deadline: {{ $task->deadline ? $task->deadline->format('d-m-Y H:i') : '-' }}
                                            </p>

                                            <button
                                                type="button"
                                                onclick="openDetailModal(
                                                    {{ $task->id }},
                                                    @js($task->title),
                                                    @js($task->course),
                                                    @js($task->description ?? ''),
                                                    @js($task->deadline ? $task->deadline->format('Y-m-d\TH:i') : ''),
                                                    @js($task->status)
                                                )"
                                                class="retro-btn px-3 py-1.5 rounded-xl text-sm bg-[#fff49a] text-[#3f2b63] font-bold shrink-0"
                                            >
                                                Detail
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p id="emptyMessage" class="text-[#5e4c7c] font-semibold">
                                Belum ada tugas.
                            </p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL DETAIL TUGAS -->
    <div id="detailModal" class="hidden fixed inset-0 bg-black/40 z-50 items-center justify-center px-4">
        <div class="window-card rounded-[20px] overflow-hidden bg-[#fff8ef] w-full max-w-xl">
            <div class="mini-window-bar px-4 py-2 flex items-center justify-between">
                <h2 class="title-font text-2xl text-[#3f2b63]">
                    Detail Tugas
                </h2>

                <button
                    type="button"
                    onclick="closeDetailModal()"
                    class="text-[#3f2b63] font-extrabold text-2xl"
                >
                    ×
                </button>
            </div>

            <div class="p-4 grid-paper">
                <div class="space-y-4">
                    <div>
                        <p class="text-sm font-bold text-[#7f6b9b]">Judul Tugas</p>
                        <h3 id="detailTitle" class="text-2xl font-extrabold text-[#3f2b63]"></h3>
                    </div>

                    <div>
                        <p class="text-sm font-bold text-[#7f6b9b]">Mata Kuliah</p>
                        <p id="detailCourse" class="text-lg font-bold text-[#ff5a92]"></p>
                    </div>

                    <div>
                        <p class="text-sm font-bold text-[#7f6b9b]">Deskripsi</p>
                        <p id="detailDescription" class="text-[#5e4c7c] leading-relaxed"></p>
                    </div>

                    <div>
                        <p class="text-sm font-bold text-[#7f6b9b]">Deadline</p>
                        <p id="detailDeadline" class="text-[#3f2b63] font-bold"></p>
                    </div>

                    <div>
                        <p class="text-sm font-bold text-[#7f6b9b]">Status</p>
                        <span id="detailStatus" class="status-pill inline-block px-4 py-2 rounded-full"></span>
                    </div>

                    <div class="flex flex-wrap gap-3 pt-3">
                        <button
                            type="button"
                            id="detailEditButton"
                            class="retro-btn px-4 py-2 rounded-xl bg-[#fff49a] text-[#3f2b63] font-bold"
                        >
                            Edit
                        </button>

                        <button
                            type="button"
                            id="detailDeleteButton"
                            class="retro-btn px-4 py-2 rounded-xl bg-[#ffb8d8] text-[#7b2c53] font-bold"
                        >
                            Hapus
                        </button>

                        <button
                            type="button"
                            onclick="closeDetailModal()"
                            class="retro-btn px-4 py-2 rounded-xl bg-[#caa8ff] text-[#3f2b63] font-bold"
                        >
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL EDIT TUGAS -->
    <div id="editModal" class="hidden fixed inset-0 bg-black/40 z-50 items-center justify-center px-4">
        <div class="window-card rounded-[20px] overflow-hidden bg-[#fff8ef] w-full max-w-xl">
            <div class="mini-window-bar px-4 py-2 flex items-center justify-between">
                <h2 class="title-font text-2xl text-[#3f2b63]">
                    Edit Tugas
                </h2>

                <button
                    type="button"
                    onclick="closeEditModal()"
                    class="text-[#3f2b63] font-extrabold text-2xl"
                >
                    ×
                </button>
            </div>

            <div class="p-4 grid-paper">
                <form id="editForm" class="space-y-4">
                    <input type="hidden" id="editTaskId">

                    <div>
                        <label class="block text-[#3f2b63] font-bold mb-2">
                            Judul Tugas
                        </label>
                        <input
                            type="text"
                            id="editTitle"
                            name="title"
                            class="retro-input w-full rounded-xl px-3 py-2 text-sm text-[#3f2b63]"
                        >
                        <p id="editTitleError" class="hidden text-sm text-red-500 mt-2 font-semibold"></p>
                    </div>

                    <div>
                        <label class="block text-[#3f2b63] font-bold mb-2">
                            Mata Kuliah
                        </label>
                        <input
                            type="text"
                            id="editCourse"
                            name="course"
                            class="retro-input w-full rounded-xl px-3 py-2 text-sm text-[#3f2b63]"
                        >
                        <p id="editCourseError" class="hidden text-sm text-red-500 mt-2 font-semibold"></p>
                    </div>

                    <div>
                        <label class="block text-[#3f2b63] font-bold mb-2">
                            Deskripsi
                        </label>
                        <textarea
                            id="editDescription"
                            name="description"
                            rows="3"
                            class="retro-input w-full rounded-xl px-3 py-2 text-sm text-[#3f2b63]"
                        ></textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div>
                            <label class="block text-[#3f2b63] font-bold mb-2">
                                Tanggal Deadline
                            </label>
                            <input
                                type="date"
                                id="editDeadlineDate"
                                name="deadline_date"
                                class="retro-input w-full rounded-xl px-3 py-2 text-sm text-[#3f2b63]"
                            >
                        </div>

                        <div>
                            <label class="block text-[#3f2b63] font-bold mb-2">
                                Jam Deadline
                            </label>
                            <input
                                type="text"
                                id="editDeadlineTime"
                                name="deadline_time"
                                maxlength="5"
                                placeholder="23:59"
                                class="retro-input w-full rounded-xl px-3 py-2 text-sm text-[#3f2b63]"
                            >
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <button
                            type="submit"
                            id="editSubmitButton"
                            class="retro-btn flex-1 rounded-xl px-4 py-2 bg-[#5a7cff] text-white font-bold text-base"
                        >
                            Simpan Perubahan
                        </button>

                        <button
                            type="button"
                            onclick="closeEditModal()"
                            class="retro-btn rounded-xl px-4 py-2 bg-[#ffb8d8] text-[#7b2c53] font-bold text-base"
                        >
                            Batal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const taskForm = document.getElementById('taskForm');
        const taskList = document.getElementById('taskList');
        const alertBox = document.getElementById('alertBox');
        const titleError = document.getElementById('titleError');
        const courseError = document.getElementById('courseError');
        const submitButton = document.getElementById('submitButton');
        const searchInput = document.getElementById('searchInput');
        const statusFilter = document.getElementById('statusFilter');

        const detailModal = document.getElementById('detailModal');
        const detailTitle = document.getElementById('detailTitle');
        const detailCourse = document.getElementById('detailCourse');
        const detailDescription = document.getElementById('detailDescription');
        const detailDeadline = document.getElementById('detailDeadline');
        const detailStatus = document.getElementById('detailStatus');
        const detailEditButton = document.getElementById('detailEditButton');
        const detailDeleteButton = document.getElementById('detailDeleteButton');

        const editModal = document.getElementById('editModal');
        const editForm = document.getElementById('editForm');
        const editTaskId = document.getElementById('editTaskId');
        const editTitle = document.getElementById('editTitle');
        const editCourse = document.getElementById('editCourse');
        const editDescription = document.getElementById('editDescription');
        const editDeadlineDate = document.getElementById('editDeadlineDate');
        const editDeadlineTime = document.getElementById('editDeadlineTime');
        const editTitleError = document.getElementById('editTitleError');
        const editCourseError = document.getElementById('editCourseError');
        const editSubmitButton = document.getElementById('editSubmitButton');

        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        taskForm.addEventListener('submit', function (event) {
            event.preventDefault();

            titleError.classList.add('hidden');
            titleError.textContent = '';

            courseError.classList.add('hidden');
            courseError.textContent = '';

            submitButton.textContent = 'Menyimpan...';
            submitButton.disabled = true;

            const formData = new FormData(taskForm);

            fetch("{{ route('tasks.store') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                    "Accept": "application/json"
                },
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(errorData => {
                        throw errorData;
                    });
                }

                return response.json();
            })
            .then(data => {
                taskForm.reset();

                const emptyMessage = document.getElementById('emptyMessage');
                if (emptyMessage) {
                    emptyMessage.remove();
                }

                taskList.prepend(createTaskCard(data.task));
                sortTaskCardsByDeadline();

                showAlert(data.message, 'success');
            })
            .catch(error => {
                if (error.errors && error.errors.title) {
                    titleError.textContent = error.errors.title[0];
                    titleError.classList.remove('hidden');
                }

                if (error.errors && error.errors.course) {
                    courseError.textContent = error.errors.course[0];
                    courseError.classList.remove('hidden');
                }

                showAlert('Gagal menambahkan tugas. Cek inputnya lagi.', 'error');
            })
            .finally(() => {
                submitButton.textContent = 'Tambah Tugas';
                submitButton.disabled = false;
            });
        });

        function openDetailModal(id, title, course, description, deadline, status) {
            detailTitle.textContent = title;
            detailCourse.textContent = course;
            detailDescription.textContent = description ? description : '-';
            detailDeadline.textContent = formatDeadline(deadline);

            if (status === 'selesai') {
                detailStatus.textContent = 'Selesai';
                detailStatus.className = 'status-pill inline-block px-4 py-2 rounded-full bg-[#b8f1d3] text-[#2f6144]';
            } else {
                detailStatus.textContent = 'Belum Selesai';
                detailStatus.className = 'status-pill inline-block px-4 py-2 rounded-full bg-[#d9c2ff] text-[#4b2e83]';
            }

            detailEditButton.onclick = function () {
                closeDetailModal();
                openEditModal(id, title, course, description, deadline);
            };

            detailDeleteButton.onclick = function () {
                closeDetailModal();
                deleteTask(id);
            };

            detailModal.classList.remove('hidden');
            detailModal.classList.add('flex');
        }

        function closeDetailModal() {
            detailModal.classList.add('hidden');
            detailModal.classList.remove('flex');
        }

        function openEditModal(id, title, course, description, deadline) {
            const parts = splitDeadline(deadline);

            editTaskId.value = id;
            editTitle.value = title;
            editCourse.value = course;
            editDescription.value = description;
            editDeadlineDate.value = parts.date;
            editDeadlineTime.value = parts.time;

            editTitleError.classList.add('hidden');
            editTitleError.textContent = '';

            editCourseError.classList.add('hidden');
            editCourseError.textContent = '';

            editModal.classList.remove('hidden');
            editModal.classList.add('flex');
        }

        function closeEditModal() {
            editModal.classList.add('hidden');
            editModal.classList.remove('flex');
        }

        editForm.addEventListener('submit', function (event) {
            event.preventDefault();

            editTitleError.classList.add('hidden');
            editTitleError.textContent = '';

            editCourseError.classList.add('hidden');
            editCourseError.textContent = '';

            editSubmitButton.textContent = 'Menyimpan...';
            editSubmitButton.disabled = true;

            const id = editTaskId.value;
            const formData = new FormData(editForm);
            formData.append('_method', 'PUT');

            fetch(`/tasks/${id}`, {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                    "Accept": "application/json"
                },
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(errorData => {
                        throw errorData;
                    });
                }

                return response.json();
            })
            .then(data => {
                const oldCard = document.getElementById(`task-${id}`);

                if (oldCard) {
                    oldCard.outerHTML = createTaskCard(data.task).outerHTML;
                }

                sortTaskCardsByDeadline();
                closeEditModal();
                showAlert(data.message, 'success');
            })
            .catch(error => {
                if (error.errors && error.errors.title) {
                    editTitleError.textContent = error.errors.title[0];
                    editTitleError.classList.remove('hidden');
                }

                if (error.errors && error.errors.course) {
                    editCourseError.textContent = error.errors.course[0];
                    editCourseError.classList.remove('hidden');
                }

                showAlert('Gagal mengedit tugas. Cek inputnya lagi.', 'error');
            })
            .finally(() => {
                editSubmitButton.textContent = 'Simpan Perubahan';
                editSubmitButton.disabled = false;
            });
        });

        function toggleTask(id) {
            fetch(`/tasks/${id}/toggle`, {
                method: "PATCH",
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                    "Accept": "application/json"
                }
            })
            .then(response => response.json())
            .then(data => {
                const oldCard = document.getElementById(`task-${id}`);

                if (oldCard) {
                    oldCard.outerHTML = createTaskCard(data.task).outerHTML;
                }

                sortTaskCardsByDeadline();
                showAlert(data.message, 'success');
            })
            .catch(() => {
                showAlert('Gagal mengubah status tugas.', 'error');
            });
        }

        function deleteTask(id) {
            if (!confirm('Yakin mau hapus tugas ini?')) {
                return;
            }

            fetch(`/tasks/${id}`, {
                method: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                    "Accept": "application/json"
                }
            })
            .then(response => response.json())
            .then(data => {
                const card = document.getElementById(`task-${id}`);

                if (card) {
                    card.remove();
                }

                if (taskList.children.length === 0) {
                    taskList.innerHTML = `
                        <p id="emptyMessage" class="text-[#5e4c7c] font-semibold">
                            Belum ada tugas.
                        </p>
                    `;
                }

                showAlert(data.message, 'success');
            })
            .catch(() => {
                showAlert('Gagal menghapus tugas.', 'error');
            });
        }

        function searchTasks() {
            const keyword = searchInput.value;
            const status = statusFilter.value;

            const url = `/tasks/search?keyword=${encodeURIComponent(keyword)}&status=${encodeURIComponent(status)}`;

            fetch(url, {
                method: "GET",
                headers: {
                    "Accept": "application/json"
                }
            })
            .then(response => response.json())
            .then(data => {
                taskList.innerHTML = '';

                if (data.tasks.length === 0) {
                    taskList.innerHTML = `
                        <p id="emptyMessage" class="text-[#5e4c7c] font-semibold">
                            Tugas tidak ditemukan.
                        </p>
                    `;
                    return;
                }

                data.tasks.forEach(task => {
                    taskList.appendChild(createTaskCard(task));
                });

                sortTaskCardsByDeadline();
            });
        }

        searchInput.addEventListener('keyup', searchTasks);
        statusFilter.addEventListener('change', searchTasks);

        function createTaskCard(task) {
            const isDone = task.status === 'selesai';
            const inputDeadline = formatDeadlineForInput(task.deadline);

            const card = document.createElement('div');
            card.id = `task-${task.id}`;
            card.dataset.deadline = inputDeadline;
            card.className = 'task-item rounded-[18px] p-4 bg-white/90';

            card.innerHTML = `
                <div class="flex items-start gap-4">
                    <input
                        type="checkbox"
                        class="custom-checkbox mt-1"
                        onchange="toggleTask(${task.id})"
                        ${isDone ? 'checked' : ''}
                    >

                    <div class="flex-1">
                        <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-3">
                            <div>
                                <h3 class="font-extrabold text-lg ${isDone ? 'line-through text-slate-400' : 'text-[#3f2b63]'}">
                                    ${escapeHtml(task.title)}
                                </h3>

                                <p class="text-[#ff5a92] font-bold mt-1">
                                    ${escapeHtml(task.course)}
                                </p>
                            </div>

                            <span class="status-pill inline-block px-3 py-1.5 rounded-full text-sm ${isDone ? 'bg-[#b8f1d3] text-[#2f6144]' : 'bg-[#d9c2ff] text-[#4b2e83]'}">
                                ${isDone ? 'Selesai' : 'Belum Selesai'}
                            </span>
                        </div>

                        <div class="flex items-center justify-between gap-3 mt-2">
                            <p class="text-sm text-[#7f6b9b] font-semibold">
                                Deadline: ${formatDeadline(task.deadline)}
                            </p>

                            <button
                                type="button"
                                onclick="openDetailModal(
                                    ${task.id},
                                    '${escapeJs(task.title)}',
                                    '${escapeJs(task.course)}',
                                    '${escapeJs(task.description ?? '')}',
                                    '${inputDeadline}',
                                    '${task.status}'
                                )"
                                class="retro-btn px-3 py-1.5 rounded-xl text-sm bg-[#fff49a] text-[#3f2b63] font-bold shrink-0"
                            >
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
            `;

            return card;
        }

        function sortTaskCardsByDeadline() {
            const cards = Array.from(taskList.querySelectorAll('.task-item'));

            cards.sort((a, b) => {
                const deadlineA = a.dataset.deadline ? parseDeadlineValue(a.dataset.deadline) : Infinity;
                const deadlineB = b.dataset.deadline ? parseDeadlineValue(b.dataset.deadline) : Infinity;

                return deadlineA - deadlineB;
            });

            cards.forEach(card => taskList.appendChild(card));
        }

        function parseDeadlineValue(deadline) {
            if (!deadline) {
                return Infinity;
            }

            const value = String(deadline);
            const normalized = value.replace('T', ' ');

            const datePart = normalized.split(' ')[0];
            const timePart = normalized.split(' ')[1] ?? '00:00';

            const [year, month, day] = datePart.split('-').map(Number);
            const [hour, minute] = timePart.split(':').map(Number);

            return new Date(year, month - 1, day, hour, minute).getTime();
        }

        function splitDeadline(deadline) {
            const value = formatDeadlineForInput(deadline);

            if (!value) {
                return {
                    date: '',
                    time: ''
                };
            }

            const parts = value.split('T');

            return {
                date: parts[0] ?? '',
                time: parts[1] ?? ''
            };
        }

        function formatDeadline(deadline) {
            if (!deadline) {
                return '-';
            }

            const value = String(deadline);

            if (value.includes('T')) {
                const datePart = value.split('T')[0];
                const timePart = value.split('T')[1].slice(0, 5);
                const [year, month, day] = datePart.split('-');

                return `${day}-${month}-${year} ${timePart}`;
            }

            if (value.includes(' ')) {
                const datePart = value.split(' ')[0];
                const timePart = value.split(' ')[1].slice(0, 5);
                const [year, month, day] = datePart.split('-');

                return `${day}-${month}-${year} ${timePart}`;
            }

            return value;
        }

        function formatDeadlineForInput(deadline) {
            if (!deadline) {
                return '';
            }

            const value = String(deadline);

            if (value.includes('T')) {
                const datePart = value.split('T')[0];
                const timePart = value.split('T')[1].slice(0, 5);

                return `${datePart}T${timePart}`;
            }

            if (value.includes(' ')) {
                const datePart = value.split(' ')[0];
                const timePart = value.split(' ')[1].slice(0, 5);

                return `${datePart}T${timePart}`;
            }

            return '';
        }

        function autoFormatTimeInput(input) {
            input.addEventListener('input', function () {
                let value = input.value.replace(/\D/g, '');

                if (value.length > 4) {
                    value = value.slice(0, 4);
                }

                if (value.length >= 3) {
                    value = value.slice(0, 2) + ':' + value.slice(2);
                }

                input.value = value;
            });
        }

        autoFormatTimeInput(document.getElementById('deadlineTime'));
        autoFormatTimeInput(document.getElementById('editDeadlineTime'));

        function showAlert(message, type) {
            alertBox.textContent = message;
            alertBox.classList.remove('hidden');

            if (type === 'success') {
                alertBox.className = 'mb-4 px-5 py-3 rounded-2xl text-sm font-semibold border-[3px] border-[#3f2b63] shadow-[4px_4px_0_#3f2b63] bg-[#b8f1d3] text-[#2f6144]';
            } else {
                alertBox.className = 'mb-4 px-5 py-3 rounded-2xl text-sm font-semibold border-[3px] border-[#3f2b63] shadow-[4px_4px_0_#3f2b63] bg-[#ffccd5] text-[#8a2346]';
            }

            setTimeout(() => {
                alertBox.classList.add('hidden');
            }, 3000);
        }

        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        function escapeJs(text) {
            if (!text) {
                return '';
;
            }

            return String(text)
                .replace(/\\/g, '\\\\')
                .replace(/'/g, "\\'")
                .replace(/"/g, '&quot;')
                .replace(/\n/g, '\\n')
                .replace(/\r/g, '');
        }
    </script>

</body>
</html>
