using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore.Storage;
using WebApplication1.Entities;

namespace WebApplication1.Controllers
{
    [Route("api/[controller]/[action]")]
    [ApiController]
    public class MyWebApiController : ControllerBase
    {
        private readonly DataBase data;
        public MyWebApiController(DataBase database)
        {
            this.data = database;
        }

        [HttpPost]
        public IActionResult CheckLogin(UserTable u)
        {
            var item = data.Users.Where(x=>x.Email == u.Email && x.Password == u.Password).FirstOrDefault();
            if (item != null)
            {
                return Ok("Successfully!");
            }
            else
            {
                return NotFound("Unsuccessfully!");
            }
        }
    }
}
