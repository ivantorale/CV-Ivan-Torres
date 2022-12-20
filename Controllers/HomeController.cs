using Microsoft.AspNetCore.Mvc;
using P1_ASP.Models;
using P1_ASP.Services;
using System.Diagnostics;

namespace P1_ASP.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;

        public HomeController(ILogger<HomeController> logger)
        {
            _logger = logger;
        }

        public IActionResult Index()
        {
            ViewBag.Vname = "Ivan Torres Alemany";
            return View();
        }

        public IActionResult Proyectos()
        {
            ViewBag.Vproject = new RepositoryOfProjects().GetProjects();
            return View();
        }

        public IActionResult Privacy()
        {
            return View();
        }

        public IActionResult FormationAcademy()
        {
            ViewBag.VFormation = new RepositoryOfAcademy().GetFormationAcademy();
            return View();
        }

        public IActionResult CV()
        {
            return View();
        }

        public IActionResult Contact()
        {
            return View();
        }
        public IActionResult Experiences()
        {
            ViewBag.VCertificates = new RepositoryOfCertificates().GetCertificates();
            return View();
        }

        public IActionResult TechnicalKnowledge()
        {
            ViewBag.VTechincal = new RepositoryOfTechnical().GetTechnical();
            return View();
        }

        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}