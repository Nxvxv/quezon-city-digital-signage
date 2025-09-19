<?php
// Admin Dashboard migrated from dashboard.html
?>
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>QC Library Digital Signage - Admin Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="dashboard.css" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: "#2563eb",
            secondary: "#6b7280",
            accent: "#eab308",
            danger: "#dc2626",
            lightgray: "#f9fafb",
            darkgray: "#374151",
          },
          fontFamily: {
            montserrat: ["Montserrat", "sans-serif"],
          },
        },
      },
    };
  </script>
</head>
<body class="h-full bg-gray-50 text-gray-900 font-montserrat">
  <div class="flex h-full">
    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r border-gray-200 flex flex-col">
      <div class="p-6 flex items-center space-x-3 border-b border-gray-200">
        <div class="w-20 h-12 rounded-md overflow-hidden">
          <img src="../assets/logoo.png" alt="QC Library Logo" class="w-full h-full object-fill" />
        </div>
        <div>
          <h1 class="text-lg font-semibold text-gray-900">QC Library</h1>
          <p class="text-sm text-gray-500">Digital Signage</p>
        </div>
      </div>
      <nav class="flex-1 px-4 py-6 space-y-2">
        <a href="#" id="tab-overview" class="flex items-center px-3 py-2 rounded-md text-primary bg-primary/20 hover:bg-primary/30">
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12h18M3 6h18M3 18h18" /></svg>
          Dashboard
        </a>
        <a href="#" id="logout-btn" class="flex items-center px-3 py-2 rounded-md text-secondary hover:bg-gray-100">
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
          Log Out
        </a>
      </nav>
      <div class="p-6 border-t border-gray-200 text-sm text-gray-500">
        <p>Branch Info</p>
        <p id="branch-info" class="mt-1 font-semibold text-gray-700">Main Branch</p>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8 overflow-auto">
      <header class="flex justify-between items-center mb-6">
        <div>
          <h2 class="text-2xl font-bold">Dashboard</h2>
          <p class="text-gray-600" id="welcome-msg"></p>
        </div>
        <button id="preview-signage" class="bg-primary text-white px-4 py-2 rounded hover:bg-blue-700">Preview Signage</button>
      </header>

      <!-- Tabs -->
      <nav class="mb-6 border border-gray-300 rounded bg-white flex overflow-hidden">
        <button id="tab-btn-overview" class="flex-1 py-2 px-4 bg-primary text-white flex items-center justify-center space-x-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12h18M3 6h18M3 18h18" /></svg>
          <span>Overview</span>
        </button>
        <button id="tab-btn-videos" class="flex-1 py-2 px-4 flex items-center justify-center space-x-2 hover:bg-red-100 text-red-600">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14v-4zM4 6h10a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2z" /></svg>
          <span>Videos</span>
        </button>
        <button id="tab-btn-announcements" class="flex-1 py-2 px-4 flex items-center justify-center space-x-2 hover:bg-blue-100 text-blue-600">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14v-4zM4 6h10a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2z" /></svg>
          <span>Announcements</span>
        </button>
        <button id="tab-btn-books" class="flex-1 py-2 px-4 flex items-center justify-center space-x-2 hover:bg-yellow-100 text-yellow-600">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 20l9-5-9-5-9 5 9 5z" /></svg>
          <span>Featured Books</span>
        </button>
        <button id="tab-btn-footer" class="flex-1 py-2 px-4 flex items-center justify-center space-x-2 hover:bg-gray-200 text-gray-600">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16" /></svg>
          <span>Footer</span>
        </button>
      </nav>

      <!-- Tab Contents -->
      <section id="tab-overview-content" class="tab-content bg-white p-6 rounded shadow">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
          <!-- ...existing code for overview cards... -->
        </div>
        <div class="bg-gray-50 p-4 rounded shadow">
          <p class="text-gray-900">You are managing <span id="summary-videos">0 video(s)</span>, <span id="summary-announcements">0 announcement(s)</span>, and <span id="summary-books">0 book(s)</span> for this branch.</p>
          <p class="text-gray-900">Click on a category above to manage its content.</p>
        </div>
      </section>

      <section id="tab-videos-content" class="tab-content hidden bg-white p-6 rounded shadow">
        <!-- ...existing code for videos tab... -->
      </section>

      <section id="tab-announcements-content" class="tab-content hidden bg-white p-6 rounded shadow">
        <!-- ...existing code for announcements tab... -->
      </section>

      <section id="tab-books-content" class="tab-content hidden bg-white p-6 rounded shadow">
        <!-- ...existing code for books tab... -->
      </section>

      <section id="tab-footer-content" class="tab-content hidden bg-white p-6 rounded shadow">
        <!-- ...existing code for footer tab... -->
      </section>
    </main>
  </div>

  <script src="dashboard-refactored.js"></script>
  <footer class="dashboard-footer">
    &copy; Created and Owned By Quezon City Government</footer>
</body>
</html>
