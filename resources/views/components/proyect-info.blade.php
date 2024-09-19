<div class="project-component">
    <h2>Sobre este proyecto</h2>
    <p>
      {{ $description }}
    </p>
    <a href="{{ $link }}" target="_blank" class="btn-visit">Visitar el sitio web</a>
  </div>
  
  <style>
    .project-component {
      background-color: #f4f4f4;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: auto;
      text-align: center;
    }
    
    .project-component h2 {
      color: #333;
    }
  
    .project-component p {
      color: #666;
      font-size: 16px;
      margin-bottom: 20px;
    }
  
    .project-component a.btn-visit {
      background-color: #3498db;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
  
    .project-component a.btn-visit:hover {
      background-color: #2980b9;
    }
  </style>
  