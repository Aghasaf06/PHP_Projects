using System.ComponentModel.DataAnnotations;

namespace WebApplication1.Entities
{
    public class UserTable
    {
        public int Id { get; set; }
        [Required]
        [StringLength(25)]
        public string Email { get; set; }
        [Required]
        [StringLength(25)]
        public string Password { get; set; }
    }
}
