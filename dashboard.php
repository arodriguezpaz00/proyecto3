<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Administración</title>
    <style>
        :root {
            --blue: #3b82f6;
            --green: #22c55e;
            --purple: #8b5cf6;
            --red: #ef4444;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-700: #374151;
            --gray-900: #111827;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: var(--gray-100);
            color: var(--gray-900);
            line-height: 1.5;
        }
        
        .header {
            background-color: white;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            padding: 1rem;
        }
        
        .header h1 {
            max-width: 80rem;
            margin: 0 auto;
            font-size: 1.875rem;
            font-weight: bold;
            color: var(--gray-900);
        }
        
        .container {
            max-width: 80rem;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 1.5rem;
        }
        
        @media (min-width: 640px) {
            .dashboard-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (min-width: 1024px) {
            .dashboard-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }
        
        .dashboard-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            border-radius: 0.5rem;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        
        .dashboard-item:hover {
            opacity: 0.9;
        }
        
        .dashboard-item-icon {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            padding: 0.75rem;
            margin-bottom: 1rem;
        }
        
        .dashboard-item-icon svg {
            width: 1.5rem;
            height: 1.5rem;
        }
        
        .dashboard-item-title {
            font-size: 1.125rem;
            font-weight: 600;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <?php include 'logs/header.php' ?>
    <header class="header">
        <h1>Dashboard de Administración</h1>
    </header>
    <main class="container">
        <div class="dashboard-grid" id="dashboardGrid"></div>
    </main>

    <script>
        const dashboardItems = [
            {
                title: "Acciones para Profesores",
                icon: `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                       </svg>`,
                color: "var(--blue)",
                link: "acciones_profesores.php"
            },
            {
                title: "Acciones para Alumnos",
                icon: `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                         <path d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                       </svg>`,
                color: "var(--green)",
                link: "acciones_alumnos.php"
            },
            {
                title: "Acciones para Asignaturas",
                icon: `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                       </svg>`,
                color: "var(--purple)",
                link: "acciones_asignaturas.php"
            },
            {
                title: "Acciones para Notas",
                icon: `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                       </svg>`,
                color: "var(--red)",
                link: "acciones_notas.php"
            }
        ];

        const dashboardGrid = document.getElementById('dashboardGrid');

        dashboardItems.forEach(item => {
            const dashboardItem = document.createElement('a');
            dashboardItem.href = item.link;
            dashboardItem.className = 'dashboard-item';
            dashboardItem.style.backgroundColor = item.color;
            
            dashboardItem.innerHTML = `
                <div class="dashboard-item-icon">${item.icon}</div>
                <h2 class="dashboard-item-title">${item.title}</h2>
            `;
            
            dashboardGrid.appendChild(dashboardItem);
        });
    </script>

    <?php include 'logs/footer.php'?>
</body>
</html>