<?php
$pageTitle  = 'Contact Us – Peeps Studio LLC';
$activePage = 'contact';

$success = false;
$errors  = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name']    ?? '');
    $email   = trim($_POST['email']   ?? '');
    $phone   = trim($_POST['phone']   ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '')    $errors[] = 'Your name is required.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'A valid email address is required.';
    if ($subject === '') $errors[] = 'Please select a subject.';
    if ($message === '') $errors[] = 'Please enter a message.';

    if (empty($errors)) {
        $to      = 'info@peepsstudio.com'; // replace with actual studio email
        $subject_line = '[Peeps Studio] ' . htmlspecialchars($subject) . ' – ' . htmlspecialchars($name);
        $body    = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
        $headers = "From: noreply@peepsstudio.com\r\nReply-To: $email";

        // mail() works on most hosting; on Azure use SendGrid or SMTP instead
        if (mail($to, $subject_line, $body, $headers)) {
            $success = true;
        } else {
            $errors[] = 'Message could not be sent. Please email us directly at info@peepsstudio.com.';
        }
    }
}

require 'includes/header.php';
?>

<!-- PAGE HERO -->
<section style="background:linear-gradient(135deg,var(--dark),var(--accent));color:#fff;text-align:center;padding:4rem 1.5rem 3rem;">
  <h1 style="font-size:clamp(1.8rem,5vw,3rem);font-weight:900;margin-bottom:.75rem;">Get in <span style="color:var(--pink)">Touch</span></h1>
  <p style="opacity:.9;font-size:1.05rem;max-width:560px;margin:0 auto;">Questions about classes, enrollment, or the studio? We&rsquo;d love to hear from you.</p>
</section>

<!-- CONTACT BODY -->
<section>
  <div class="container">
    <div class="contact-grid">

      <!-- CONTACT INFO -->
      <div class="contact-info">
        <h3>Studio Information</h3>

        <p><strong>Address:</strong> 123 Dance Ave, Suite 100<br>Orlando, FL 32801</p>
        <p><strong>Phone:</strong> <a href="tel:+14075550100" style="color:var(--pink)">(407) 555-0100</a></p>
        <p><strong>Email:</strong> <a href="mailto:info@peepsstudio.com" style="color:var(--pink)">info@peepsstudio.com</a></p>

        <h3 style="margin-top:1.5rem;">Studio Hours</h3>
        <p><strong>Mon–Fri:</strong> 3:30 PM – 8:00 PM</p>
        <p><strong>Saturday:</strong> 8:30 AM – 1:00 PM</p>
        <p><strong>Sunday:</strong> Closed</p>

        <h3 style="margin-top:1.5rem;">Follow Us</h3>
        <p>Stay connected for recital updates, class cancellations, and studio news.</p>
        <p style="margin-top:.5rem;">
          <a href="#" style="color:var(--pink);font-weight:700;">Facebook</a> &nbsp;|&nbsp;
          <a href="#" style="color:var(--pink);font-weight:700;">Instagram</a>
        </p>
      </div>

      <!-- CONTACT FORM -->
      <div>
        <?php if ($success): ?>
          <div class="alert alert-success">
            &#x2705; Your message has been sent! We&rsquo;ll get back to you within one business day.
          </div>
        <?php endif; ?>

        <?php if (!empty($errors)): ?>
          <div class="alert alert-error">
            <?php foreach ($errors as $e): ?>
              <div>&#x26A0; <?= htmlspecialchars($e) ?></div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <?php if (!$success): ?>
        <form method="POST" action="/contact.php" novalidate>

          <div class="form-row">
            <div>
              <label for="name">Full Name *</label>
              <input type="text" id="name" name="name" placeholder="Jane Smith"
                     value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" required>
            </div>
            <div>
              <label for="email">Email Address *</label>
              <input type="email" id="email" name="email" placeholder="jane@example.com"
                     value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
            </div>
          </div>

          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" placeholder="(407) 555-0123"
                 value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">

          <label for="subject">Subject *</label>
          <select id="subject" name="subject" required>
            <option value="">— Select a topic —</option>
            <option value="Class Enrollment"     <?= (($_POST['subject'] ?? '') === 'Class Enrollment')     ? 'selected' : '' ?>>Class Enrollment</option>
            <option value="Trial Class Request"  <?= (($_POST['subject'] ?? '') === 'Trial Class Request')  ? 'selected' : '' ?>>Trial Class Request</option>
            <option value="Tuition & Billing"    <?= (($_POST['subject'] ?? '') === 'Tuition & Billing')    ? 'selected' : '' ?>>Tuition &amp; Billing</option>
            <option value="Competitive Team"     <?= (($_POST['subject'] ?? '') === 'Competitive Team')     ? 'selected' : '' ?>>Competitive Team</option>
            <option value="General Question"     <?= (($_POST['subject'] ?? '') === 'General Question')     ? 'selected' : '' ?>>General Question</option>
          </select>

          <label for="message">Message *</label>
          <textarea id="message" name="message" placeholder="Tell us about your dancer — age, experience, and which classes interest you."><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>

          <button type="submit" class="btn" style="width:100%;font-size:1rem;">Send Message</button>
        </form>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>

<!-- MAP PLACEHOLDER -->
<section style="padding:0 0 4rem;">
  <div class="container">
    <div style="background:var(--light);border-radius:12px;padding:3rem;text-align:center;border:2px dashed #ddd;">
      <p style="color:#888;font-size:.95rem;">&#x1F5FA;&#xFE0F; &nbsp;Embed a Google Maps iframe here once your studio address is confirmed.</p>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
