
// Theme Accordion function
document.addEventListener('DOMContentLoaded', function () {
    // Select all accordion groups
    const accordionGroups = document.querySelectorAll('.theme-accordion .wp-block-group.is-vertical');
  
    accordionGroups.forEach((group) => {
      // Get the .wp-block-group.is-horizontal (clickable header), the paragraph (p), and the image
      const accordionHeader = group.querySelector('.wp-block-group.is-horizontal'); // Select the clickable header
      const paragraph = group.querySelector('p'); // Select the paragraph
      const image = group.querySelector('figure img'); // Select the image inside the figure
  
      if (accordionHeader && paragraph && image) {
        // Initially hide paragraph and reset the image
        paragraph.style.position = 'absolute';
        paragraph.style.overflow = 'hidden';
        paragraph.style.transition = 'height 0.3s, opacity 0.3s';
        paragraph.style.height = '0';
        paragraph.style.opacity = '0';
        paragraph.style.visibility = 'hidden';
        image.style.transition = 'transform 0.3s ease'; // Add transition for image rotation
  
        // Add click event to toggle paragraph visibility
        accordionHeader.addEventListener('click', function () {
          // First, close any other open accordion items
          accordionGroups.forEach((otherGroup) => {
            const otherParagraph = otherGroup.querySelector('p');
            const otherImage = otherGroup.querySelector('figure img');
            if (otherGroup !== group) {
              // Collapse any other open accordion
              if (otherParagraph && otherImage) {
                otherParagraph.style.height = '0';
                otherParagraph.style.opacity = '0';
                paragraph.style.visibility = 'hidden';
                otherParagraph.style.position = 'absolute'; // Wait for transition to finish before hiding
                otherImage.style.transform = 'rotate(0deg)';
              }
            }
          });
  
          // Toggle the clicked accordion's paragraph visibility
          if (paragraph.style.position === 'absolute') {
            // Expand paragraph
            paragraph.style.position = 'static';
            paragraph.style.height = 'auto'; // Dynamically set the maxHeight
            paragraph.style.opacity = '1';
            paragraph.style.visibility = 'visible';
            
            // Rotate the image
            image.style.transform = 'rotate(180deg)';
          } else {
            // Collapse paragraph
            paragraph.style.height = '0';
            paragraph.style.opacity = '0';
            paragraph.style.visibility = 'hidden';
            paragraph.style.position = 'absolute'; // Wait for transition to finish before hiding
            
            // Reset the image rotation
            image.style.transform = 'rotate(0deg)';
          }
        });
      }
    });
  });
  
// document.addEventListener('DOMContentLoaded', function () {
//     // Select all accordion groups
//     const accordionGroups = document.querySelectorAll('.theme-accordion .wp-block-group.is-vertical');
  
//     accordionGroups.forEach((group) => {
//       // Get the .wp-block-group.is-horizontal (clickable header), the paragraph (p), and the image
//       const accordionHeader = group.querySelector('.wp-block-group.is-horizontal'); // Select the clickable header
//       const paragraph = group.querySelector('p'); // Select the paragraph
//       const image = group.querySelector('figure img'); // Select the image inside the figure
  
//       if (accordionHeader && paragraph && image) {
//         // Initially hide paragraph and reset the image
//         paragraph.style.opacity = '0';
//         paragraph.style.visibility = 'hidden';
//         paragraph.style.transform = 'translateY(-20px)';
//         image.style.transition = 'transform 0.3s ease'; // Add transition for image rotation
  
//         // Add click event to toggle paragraph visibility
//         accordionHeader.addEventListener('click', function () {
//           // First, close any other open accordion items
//           accordionGroups.forEach((otherGroup) => {
//             const otherParagraph = otherGroup.querySelector('p');
//             const otherImage = otherGroup.querySelector('figure img');
//             const otherHeader = otherGroup.querySelector('.wp-block-group.is-horizontal');
//             if (otherGroup !== group && otherHeader && otherParagraph && otherImage) {
//               // Collapse any other open accordion
//               otherParagraph.style.opacity = '0';
//               otherParagraph.style.visibility = 'hidden';
//               otherParagraph.style.transform = 'translateY(-20px)';
//               otherImage.style.transform = 'rotate(0deg)';
//               otherHeader.classList.remove('active');
//             }
//           });
  
//           // Toggle the clicked accordion's paragraph visibility
//           if (accordionHeader.classList.contains('active')) {
//             // Collapse paragraph
//             paragraph.style.opacity = '0';
//             paragraph.style.visibility = 'hidden';
//             paragraph.style.transform = 'translateY(-20px)';
//             image.style.transform = 'rotate(0deg)';
//             accordionHeader.classList.remove('active');
//           } else {
//             // Expand paragraph
//             paragraph.style.opacity = '1';
//             paragraph.style.visibility = 'visible';
//             paragraph.style.transform = 'translateY(0)';
//             image.style.transform = 'rotate(180deg)';
//             accordionHeader.classList.add('active');
//           }
//         });
//       }
//     });
// });


  