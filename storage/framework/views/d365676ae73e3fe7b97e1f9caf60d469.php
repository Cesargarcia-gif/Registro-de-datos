<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Recibo - <?php echo e($nota->title); ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 20px;
            color: #1e3a8a; /* azul oscuro */
            background: #f3f4f6;
        }

        .recibo {
            max-width: 600px;
            margin: 0 auto 40px auto;
            padding: 30px 25px;
            border: 3px solid #2563eb; /* azul brillante */
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(37, 99, 235, 0.3);
            background-color: #ffffff;
            position: relative;
            overflow: hidden;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: #1d4ed8;
            border-bottom: 2px solid #3b82f6;
            padding-bottom: 12px;
            font-weight: 700;
            font-size: 1.8rem;
        }

        .detalle {
            margin: 12px 0;
            font-size: 17px;
        }

        .detalle strong {
            display: inline-block;
            width: 130px;
            color: #2563eb;
        }

        .footer {
            margin-top: 35px;
            font-size: 13px;
            color: #4b5563;
            border-top: 1px dashed #60a5fa;
            padding-top: 10px;
            text-align: center;
            font-style: italic;
        }

        .copia-label {
            position: absolute;
            top: 18px;
            right: 25px;
            font-weight: 700;
            font-size: 16px;
            color: #2563eb;
            background-color: #dbeafe;
            padding: 5px 12px;
            border-radius: 6px;
            box-shadow: 0 0 5px #60a5fa;
            z-index: 10;
        }

        .separator {
            border-top: 4px dashed #2563eb;
            margin: 50px 0;
        }

        .no-break {
            page-break-inside: avoid;
        }

        /* Marca de agua con texto */
        .recibo::before {
            content: attr(data-watermark);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-45deg);
            font-size: 6rem;
            font-weight: 900;
            color: #93c5fd;
            opacity: 0.15;
            pointer-events: none;
            user-select: none;
            white-space: nowrap;
            z-index: 1;
        }
    </style>
</head>
<body onload="window.print()">

    <div class="recibo no-break" data-watermark="ORIGINAL">
        <div class="copia-label">ORIGINAL</div>

        <h2>Hermandad de Cuaresma y Semana Santa</h2>

        <div class="detalle"><strong>Nombre:</strong> <?php echo e($nota->title); ?></div>
        <div class="detalle"><strong>Monto:</strong> <?php echo e($nota->monto); ?></div>
        <div class="detalle"><strong>Turno:</strong> <?php echo e($nota->turno); ?></div>
        <div class="detalle"><strong>Descripción:</strong> <?php echo e($nota->description); ?></div>

        <div class="footer">
            Semana Santa 2026.<br />
        </div>
    </div>

    <div class="separator"></div>

    <div class="recibo no-break" data-watermark="COPIA">
        <div class="copia-label">COPIA</div>

        <h2>Hermandad de Cuaresma y Semana Santa</h2>

        <div class="detalle"><strong>Nombre:</strong> <?php echo e($nota->title); ?></div>
        <div class="detalle"><strong>Descripción:</strong> <?php echo e($nota->monto); ?></div>
        <div class="detalle"><strong>Turno:</strong> <?php echo e($nota->turno); ?></div>
        <div class="detalle"><strong>Descripción:</strong> <?php echo e($nota->description); ?></div>

        <div class="footer">
            Semana Santa 2026.<br />
        </div>
    </div>

</body>
</html>
<?php /**PATH C:\Users\Asistente IT 2\Documents\crudLivewire prueba login\resources\views/notes/imprimir.blade.php ENDPATH**/ ?>