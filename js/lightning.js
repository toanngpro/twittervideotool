const margin = 0;

const paths = Array.from(document.querySelectorAll(".electric-snake")).map(path => {
    const svg = path.closest("svg");
    const rect = svg?.getBoundingClientRect();
    return {
        element: path,
        width: rect?.width || 250,   // fallback náº¿u khÃ´ng tÃ­nh Ä‘Æ°á»£c
        height: rect?.height || 250
    };
});

function getPerimeterPoint(t, width, height, margin = 0) {
    const perimeter = 2 * (width + height);
    const wrappedT = t % 1;
    const d = wrappedT * perimeter;

    if (d < width) {
        return [d + margin, margin];
    } else if (d < width + height) {
        return [width - margin, d - width + margin];
    } else if (d < 2 * width + height) {
        return [2 * width + height - d - margin, height - margin];
    } else {
        const yPos = Math.max(margin, perimeter - d - margin);
        return [margin, yPos];
    }
}

function generateElectricPath(t, numSegments, width, height) {
    const segmentLength = 0.01;
    const jitterAmount = 8;
    let pathData = "";
    const safeNumSegments = Math.max(1, Math.round(numSegments));

    for (let i = 0; i <= safeNumSegments; i++) {
        const progress = (t + i * segmentLength) % 1;
        const [x, y] = getPerimeterPoint(progress, width, height);
        const currentJitter = jitterAmount * (0.5 + Math.random() * 0.75);
        const jitterX = x + (Math.random() - 0.5) * currentJitter;
        const jitterY = y + (Math.random() - 0.5) * currentJitter;
        pathData += i === 0 ? `M ${jitterX},${jitterY}` : ` L ${jitterX},${jitterY}`;
    }

    return pathData;
}

let t = 0;

function animateBorder() {
    const minSegments = 8;
    const maxSegments = 25;

    paths.forEach(({ element, width, height }) => {
        const randomSegmentCount = Math.floor(minSegments + Math.random() * (maxSegments - minSegments + 1));
        element.setAttribute("d", generateElectricPath(t, randomSegmentCount, width, height));
        element.setAttribute("stroke-width", 1 + Math.random() * 2);
        element.style.opacity = 0.5 + Math.random() * 0.5;
    });

    t += 0.02;
    requestAnimationFrame(animateBorder);
}

animateBorder();